<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

// load model
use App\Models\Stable;
use App\Models\Slot;
use App\Models\Package;
use App\Models\Booking;
use App\Models\Province;
use App\Models\BookingDetail;

// load plugin
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class RidingClassController extends Controller
{
    public function search_list_class(Request $request)
    {
        $Query = Package::select('*')->where('approval_status', 'Accepted');
        if ($request->has('name') && $request->name != null) {
            $Query->where(function ($query) use ($request) {
                $query->orWhereRaw("lower(name) like '%" . strtolower($request->name) . "%'");
            });
        }
        if ($request->has('date') && $request->date != null) {
            $Query->where('date', $request->date);
        }
        if ($request->has('time') && $request->time != null) {
            $Query->where('time', $request->time);
        }

        $data = $Query->get();
        return view('riding_class.list-package', compact('data'));
    }
    public function booking_class(Request $request)
    {
        $list_detail = Package::with(['stable'])->where('id', Crypt::decryptString($request->id))->first();
        $data_slot = Slot::select('date', 'user_id')->where('user_id', $list_detail->user_id)->groupBy('date', 'user_id')->orderBy('date', 'asc')->get();
        return view('riding_class.booking-package', compact('list_detail', 'data_slot'));
    }
    
    public function addToCart(Request $request)
    {
        session()->forget("data_list_slot");
        session()->forget("data_list_package");

        $data = $request->all();
        foreach ($data['chackbox'] as $item => $value) {
            if (!$data['chackbox'][$item] == null) {
                $data2 = array(
                    'slot_id'               => $data['chackbox'][$item],
                );
                session()->push('data_list_slot', $data2);
            }
        }

        $data1 = array(
            'package_id'            => $request->package_id,
            'package_name'          => $request->package_name,
            'stable_name'           => $request->stable_name,
            'description'           => $request->description,
            'price_total'           => $request->price_total,
            'price_subtotal'        => $request->price_subtotal,
        );
        session()->push('data_list_package', $data1);
        return redirect()->route('riding_class.pesan.addCart');
    }

    public function pesanToCart(Request $request)
    {
        // session()->forget("data_list");
        if (session("data_list_package") == null) {
            return redirect()->route('riding_class.search_class');
        } else {
            $data_list_slot = session("data_list_slot");
            $data_list_package = session("data_list_package");
            $data_payment = DB::table('bank_payments')->get();
            return view('riding_class.after-booking-package', compact('data_list_slot', 'data_list_package', 'data_payment'));
        }
    }

    public function booking_payment(Request $request, Booking $booking, BookingDetail $booking_detail)
    {
        // session()->forget("data_list_slot");
        // session()->forget("data_list_package");
           
        if (session("data_list_package") == null) {
            return redirect()->route('riding_class.search_class');
        } else {
            $data = $request->all();
            $booking->user_id           = Auth::user()->id;
            $booking->price_total       = $request->price_total;
            $booking->bank_payment_id   = $request->payment;
            $booking->save(); // save booking

            $time_start = strtotime($booking->created_at);
            $time_end   = strtotime(now());

            //menghitung selisih dengan hasil detik
            $diff    =$time_end - $time_start;
        
            //membagi detik menjadi jam
            $jam    =floor($diff / (60 * 60));

            //membagi sisa detik setelah dikurangi $jam menjadi menit
            $menit    =$diff - $jam * (60 * 60);

    
            // insert booking detail
            foreach (session("data_list_package") as $key => $row) {
                # code...
    
                $booking_detail->package_id = $row['package_id'];
                $booking_detail->price_subtotal = $row['price_subtotal'];
                $booking_detail->booking_id = $booking->id;
                $booking_detail->save();
    
                foreach ($data['slot_id'] as $item => $value) {
                    if (!$data['slot_id'][$item] == null) {
                        DB::table('slot_user')->insert([
                            'booking_detail_id' => $booking_detail->id,
                            'slot_id'           => $data['slot_id'][$item],
                            'user_id'           => Auth::user()->id,
                            'qr_code'           => '-',
                            'qr_code_status'    => '-',
                        ]);
                    }
                    //update slot capacity_booked
                    $count = DB::table('slot_user')->where('slot_id', $data['slot_id'][$item])->count();
                    $slot = Slot::find($data['slot_id'][$item]);
                    $slot->capacity_booked   = $count;
                    $slot->save();

                }

                if ($diff > 3600) {
                    $booking->approval_status = "Expired";
                    $booking->save(); // save booking
                    Alert::success('Your Payment has been expired.', 'Success.')->persistent(true)->autoClose(3600);
                    return redirect()->back();
                }
            }
            
            if ($diff > 3600) {
                $booking->approval_status = "Expired";
                $booking->save(); // save booking
                Alert::success('Your Payment has been expired.', 'Success.')->persistent(true)->autoClose(3600);
                return redirect()->back();
            }


    
            session()->forget("data_list_slot");
            session()->forget("data_list_package");
            $data_booking_id = $booking->id;
            $data_list = DB::table('slot_user as a')
            ->where('c.booking_id', $data_booking_id)
            ->leftJoin('slots as b', 'a.slot_id', '=', 'b.id')
            ->leftJoin('booking_details as c', 'a.booking_detail_id', '=', 'c.id')
            ->leftJoin('packages as d', 'c.package_id', '=', 'd.id')
            ->leftJoin('stables as e', 'd.stable_id', '=', 'e.id')
            ->select('b.date', 'b.time_start', 'b.time_end', 'd.name', 'e.name as stable_name', 'c.price_subtotal')->get();

            $data_payment = DB::table('bank_payments')->where('id', $request->payment)->first();
            
            return view('riding_class.history-pay', compact('data_list', 'data_booking_id', 'data_payment'));
        }
    }

    public function history_order(Request $request)
    {

        // dd($request->booking_id);
        $booking = Booking::find($request->booking_id);
        $booking->updated_at = date('Y-m-d H:i:s');
        $booking->approval_status = null;

        if ($request->hasFile('photo')) {
            $booking->photo = $request->file('photo')->getClientOriginalName();
            $image_path = $request->file('photo')->storeAs('booking/photo', $booking->photo, 'public');
        }
        $booking->save();
        $data_booking_id = $request->booking_id;
        
        return redirect()->route('riding_class.booking.list.qrcode', ['booking_id' =>  $data_booking_id]);
    }

    public function historyorderDetail()
    {
        $province = Province::all();
        $data = Stable::with(['user'])->where('user_id', Auth::user()->id)->first();
        $data_list = DB::table('booking_details as c')
        ->where('f.user_id', Auth::user()->id)
        ->leftJoin('packages as d', 'c.package_id', '=', 'd.id')
        ->leftJoin('stables as e', 'd.stable_id', '=', 'e.id')
        ->leftJoin('bookings as f', 'c.booking_id', '=', 'f.id')
        ->select('f.id', 'd.name', 'e.name as stable_name','f.approval_status')->groupBy('f.id', 'e.name', 'd.name')->get();

        return view('riding_class.history_order', compact('data', 'data_list', 'province'));
    }

    public function booking_list_qrcode(Request $request)
    {
        $data_booking_id = $request->booking_id;
        $data_list = DB::table('slot_user as a')
        ->where('c.booking_id', $data_booking_id)
        ->leftJoin('slots as b', 'a.slot_id', '=', 'b.id')
        ->leftJoin('booking_details as c', 'a.booking_detail_id', '=', 'c.id')
        ->leftJoin('packages as d', 'c.package_id', '=', 'd.id')
        ->leftJoin('stables as e', 'd.stable_id', '=', 'e.id')
        ->select('b.date', 'b.time_start', 'b.time_end', 'd.name', 'e.name as stable_name')->get();
        $status_booking = Booking::select('*')->where('id', $data_booking_id)->first();
        $booking_detail = BookingDetail::select('*')->where('booking_id', $data_booking_id)->limit(1)->get();
        $data_payment = DB::table('bank_payments')->where('id', $status_booking->bank_payment_id)->first();
        
        return view('riding_class.history-pay-confirmasi', compact('data_list', 'data_booking_id', 'status_booking', 'booking_detail', 'data_payment'));
    }
}
