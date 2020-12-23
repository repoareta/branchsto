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
use App\Models\BookingDetail;

// load plugin
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
class RidingClassController extends Controller
{
    public function search_list_class(Request $request)
    {
        $Query = Package::select('*');                        
        if ($request->has('name') && $request->name != null) {
            $Query->where(function ($query) use ($request) {
                $query->orWhereRaw("lower(name) like '%" . strtolower($request->name) . "%'");
            });
        }
        if ($request->has('date') && $request->date != null){
            $Query->where('date', $request->date);
        }            
        if ($request->has('time') && $request->time != null){
            $Query->where('time', $request->time);
        }            

        $data = $Query->get();
        return view('riding_class.list-package',compact('data'));               
    }
    public function booking_class(Request $request)
    {
        $list_detail = Package::with(['stable'])->where('id', Crypt::decryptString($request->id))->get();
        $data_slot = Slot::select('date')->whereYear('date',date('Y'))->whereMonth('date',date('m'))->groupBy('date')->get();
        return view('riding_class.booking-package',compact('list_detail','data_slot'));
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
        $data_list_slot = session("data_list_slot");
        $data_list_package = session("data_list_package");
       
        return view('riding_class.after-booking-package',compact('data_list_slot','data_list_package'));       
    }

    public function booking_payment(Request $request, Booking $booking, BookingDetail $booking_detail)
    {
        // session()->forget("data_list_slot");
        // session()->forget("data_list_package");       
        $data = $request->all();
        $booking->user_id     = Auth::user()->id;
        $booking->price_total = $request->price_total;
        $booking->save(); // save booking

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
                        'qr_code'           => 'a',
                        'qr_code_status'    => 'A',
                    ]);
                }
            }
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
        ->select('b.date','b.time_start','b.time_end','d.name','e.name as stable_name')->get();

        return view('riding_class.history-pay',compact('data_list','data_booking_id'));       
    }

    public function history_order(Request $request)
    {

        // dd($request->booking_id);
        $booking = Booking::find($request->booking_id);
        $booking->updated_at = date('Y-m-d H:i:s');
        $booking->bank_payment_id = $request->bank_payment_id;
        $booking->approval_status = '';

        if ($request->hasFile('photo')) {
            $booking->photo = $request->file('photo')->getClientOriginalName();
            $image_path = $request->file('photo')->storeAs('booking/photo', $booking->photo, 'public');
        }
        $booking->save();
        $data_booking_id = $request->booking_id;
        $data_list = DB::table('slot_user as a')
        ->where('c.booking_id', $data_booking_id)
        ->leftJoin('slots as b', 'a.slot_id', '=', 'b.id')
        ->leftJoin('booking_details as c', 'a.booking_detail_id', '=', 'c.id')
        ->leftJoin('packages as d', 'c.package_id', '=', 'd.id')
        ->leftJoin('stables as e', 'd.stable_id', '=', 'e.id')
        ->select('b.date','b.time_start','b.time_end','d.name','e.name as stable_name')->get();
        $status_booking = Booking::where('id',$data_booking_id)->first();
        
        return view('riding_class.history-pay-confirmasi',compact('data_list','data_booking_id'));
    }

    public function historyorderDetail()
    {
        $data = Stable::with(['user'])->where('user_id', Auth::user()->id)->first();
        $data_list = DB::table('slot_user as a')
        ->where('f.user_id', Auth::user()->id)
        ->leftJoin('slots as b', 'a.slot_id', '=', 'b.id')
        ->leftJoin('booking_details as c', 'a.booking_detail_id', '=', 'c.id')
        ->leftJoin('packages as d', 'c.package_id', '=', 'd.id')
        ->leftJoin('stables as e', 'd.stable_id', '=', 'e.id')
        ->leftJoin('bookings as f', 'c.booking_id', '=', 'f.id')
        ->select('f.id','d.name','e.name as stable_name')->groupBy('f.id','e.name','d.name')->get();

        return view('riding_class.history_order',compact('data','data_list'));
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
        ->select('b.date','b.time_start','b.time_end','d.name','e.name as stable_name')->get();
        $status_booking = Booking::select('*')->where('id',$data_booking_id)->get();

        return view('riding_class.history-pay-confirmasi',compact('data_list','data_booking_id','status_booking'));
    }

}
