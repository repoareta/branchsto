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
use App\Models\SlotUser;

// load plugin
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class RidingClassController extends Controller
{
    //tampilan list package
    public function search_list_class(Request $request)
    {
        $stables = Stable::select("id", "name")->where('approval_status', 'Accepted')->get();        
        $data = '';
        $data2 = '';
        if ($request->all()) {
            if ($request->date && $request->time_start) {
                $Query = Stable::with(['package' => function ($q) {
                    $q->where('packages.session_usage', 'Yes');
                }])->where('approval_status', 'Accepted');

                if ($request->has('name') && $request->name != null) {
                    $Query->where(function ($query) use ($request) {
                        $query->orWhereRaw("lower(name) like '%" . strtolower($request->name) . "%'");
                    });
                }
    
    
                $Query2 = Slot::select('*');
                if ($request->has('date') && $request->date != null) {
                    $Query2->where('date', $request->date);
                    if ($request->has('time_start') && $request->time_start != null) {
                        $Query2->where('time_start', $request->time_start);
                    } else {
                        $Query2 = null;
                    }
                } else {
                    $Query2 = null;
                }
                // // return response()->json($Query2->get());
                // // return response()->json($Query2->get());die;
                // var_dump(count($Query2->get()));die;
                // // var_dump(($Query2));die;
                if (count($Query2->get()) == 0) {
                    $data = '';
                } else {
                    $data = $Query->get();
                    $data2 = $Query2->get();
                }
                // return response()->json($Query->first());
            } elseif ($request->name) {
                $Query = Stable::with(['package' => function ($q) {
                    $q->where('packages.session_usage', null);
                }])->where('approval_status', 'Accepted');

                if ($request->has('name') && $request->name != null) {
                    $Query->where(function ($query) use ($request) {
                        $query->orWhereRaw("lower(name) like '%" . strtolower($request->name) . "%'");
                    });
                }
                
                $data = $Query->get();
            } else {
                $data = '';
            }
        }
        return view('riding_class.list-package', compact('data', 'data2', 'stables'));
    }

    // tampilan booking package untuk memilih choose date
    public function booking_class(Request $request)
    {
        $list_detail = Package::with(['stable'])->where('id', Crypt::decryptString($request->id))->first();
        $data_slot = Slot::select('*')->where('user_id', $list_detail->user_id)->
        where('time_start', $request->time_start)->where('date', $request->date)->get();
        return view('riding_class.booking-package', compact('list_detail', 'data_slot'));
    }
    
    // tampilan booking detail
    public function addToCart(Request $request)
    {
        session()->forget("data_list_slot");
        session()->forget("data_list_package");
        session()->forget("session_usage");
        if ($request->usage_status == 'pony_ride') {
            $data1 = array(
                'package_id'            => $request->package_id,
                'package_name'          => $request->package_name,
                'stable_name'           => $request->stable_name,
                'description'           => $request->description,
                'price_total'           => $request->price_total,
                'price_subtotal'        => $request->price_subtotal,
                'booking_at'            => $request->date_pony_ride,
            );
            $data2 =  $request->usage_status;

            session()->push('data_list_package', $data1);
            session()->put('session_usage', $data2);
            return redirect()->route('riding_class.pesan.addCart');
        } else {
            $data2 = array(
                'slot_id'               => $request->slot_id,
                'time_start'            => $request->time_start,
                'time_end'              => $request->time_end,
                'date'                  => $request->date,
            );
            session()->push('data_list_slot', $data2);

            $data1 = array(
                'package_id'            => $request->package_id,
                'package_name'          => $request->package_name,
                'stable_name'           => $request->stable_name,
                'description'           => $request->description,
                'price_total'           => $request->price_total,
                'price_subtotal'        => $request->price_subtotal,
            );
            $data2 =  'riding_class';

            session()->push('data_list_package', $data1);
            session()->put('session_usage', $data2);
            // var_dump(session("data_list_slot"));die;
            return redirect()->route('riding_class.pesan.addCart');
        }
    }

    // tampilan booking detail bagian upload payment
    public function pesanToCart(Request $request)
    {
        // session()->forget("data_list");
        if (session("data_list_package") == null) {
            return redirect()->route('riding_class.search_class');
        } else {
            $data_list_slot = session("data_list_slot");
            $data_list_package = session("data_list_package");
            $data_session_usage = session()->get("session_usage");
            $data_payment = DB::table('bank_payments')->get();
            return view('riding_class.after-booking-package', compact('data_list_slot', 'data_list_package', 'data_payment', 'data_session_usage'));
        }
    }

    // tampilan booking detail ketika sudah melakukan confirmasi payment
    public function booking_payment(Request $request, Booking $booking, BookingDetail $booking_detail)
    {
        if (session("data_list_package") == null) {
            return redirect()->route('riding_class.search_class');
        } else {
            // action bagian pony ride
            if ($request->usage_status == 'pony_ride') {
                $data = $request->all();
                $booking->user_id           = Auth::user()->id;
                $booking->price_total       = $request->price_total;
                $booking->bank_payment_id   = $request->payment;
                
                $booking->save(); // save booking
                
                // insert booking detail
                foreach (session("data_list_package") as $key => $row) {
                    // no urut untuk pony ride
                    $noUrutAkhir = BookingDetail::where('package_id', $row['package_id'])->whereDate('booking_at', '=', Carbon::parse($request->booking_at)->toDateString())->max('queue_no');
                    if ($noUrutAkhir) {
                        $noUrutAkhir  = sprintf("%03s", abs($noUrutAkhir + 1));
                    } else {
                        $noUrutAkhir = sprintf("%03s", 1);
                    }
                    $booking_detail->package_id     = $row['package_id'];
                    $booking_detail->price_subtotal = $row['price_subtotal'];
                    $booking_detail->booking_id     = $booking->id;
                    $booking_detail->queue_no       = $noUrutAkhir;
                    $booking_detail->booking_at     = Carbon::parse($request->booking_at)->toDateString();
                    $booking_detail->save(); // save booking detail
                }

                session()->forget("data_list_slot");
                session()->forget("data_list_package");
                $data_booking_id = $booking->id;
                $data_list = DB::table('booking_details as c')
                    ->where('c.booking_id', $data_booking_id)
                    ->leftJoin('packages as d', 'c.package_id', '=', 'd.id')
                    ->leftJoin('stables as e', 'd.stable_id', '=', 'e.id')
                    ->select('d.session_usage', 'c.booking_at', 'c.queue_no', 'd.name', 'session_usage', 'e.name as stable_name', 'c.price_subtotal')->get();
                $data_payment = DB::table('bank_payments')->where('id', $request->payment)->first();
                return view('riding_class.history-pay', compact('data_list', 'data_booking_id', 'data_payment','request'));

            }else{
                // action bagian riding class
                $data = $request->all();
                $booking->user_id           = Auth::user()->id;
                $booking->price_total       = $request->price_total;
                $booking->bank_payment_id   = $request->payment;
                $booking->save(); // save booking
                // insert booking detail
                foreach (session("data_list_package") as $key => $row) {
                    $booking_detail->package_id = $row['package_id'];
                    $booking_detail->price_subtotal = $row['price_subtotal'];
                    $booking_detail->booking_id = $booking->id;
                    $booking_detail->booking_at     = null;
                    $booking_detail->save();

                    if (!$data['slot_id'] == null) {
                        DB::table('slot_users')->insert([
                            'booking_detail_id' => $booking_detail->id,
                            'slot_id'           => $data['slot_id'],
                            'user_id'           => Auth::user()->id,
                            'created_at'        => Carbon::now(),
                            'updated_at'        => Carbon::now(),
                        ]);

                    //update slot capacity_booked
                    
                    $count = DB::table('slot_users')->where('slot_id', $data['slot_id'])->count();
                    $slot = Slot::find($data['slot_id']);
                    $slot->capacity_booked   = $count;                                        
                    $slot->save();
                    }
                }

                session()->forget("data_list_slot");
                session()->forget("data_list_package");
                $data_booking_id = $booking->id;
                $data_list = DB::table('slot_users as a')
                    ->where('c.booking_id', $data_booking_id)
                    ->leftJoin('slots as b', 'a.slot_id', '=', 'b.id')
                    ->leftJoin('booking_details as c', 'a.booking_detail_id', '=', 'c.id')
                    ->leftJoin('packages as d', 'c.package_id', '=', 'd.id')
                    ->leftJoin('stables as e', 'd.stable_id', '=', 'e.id')
                    ->select('b.date', 'b.time_start', 'b.time_end', 'd.name', 'e.name as stable_name', 'c.price_subtotal')->get();
                $data_payment = DB::table('bank_payments')->where('id', $request->payment)->first();
                return view('riding_class.history-pay', compact('data_list', 'data_booking_id', 'data_payment','request'));
            }
        }
    }

    public function history_order(Request $request)
    {
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
            ->orderBy('id', 'DESC')
            ->where('f.user_id', Auth::user()->id)
            ->leftJoin('packages as d', 'c.package_id', '=', 'd.id')
            ->leftJoin('stables as e', 'd.stable_id', '=', 'e.id')
            ->leftJoin('bookings as f', 'c.booking_id', '=', 'f.id')
            ->select('f.id', 'd.name', 'e.name as stable_name', 'f.approval_status')->groupBy('f.id', 'e.name', 'd.name')->get();

        return view('riding_class.history_order', compact('data', 'data_list', 'province'));
    }

    public function booking_list_qrcode(Request $request)
    {
        $data_booking_id = $request->booking_id;
        $data_cekstatus = BookingDetail::where('booking_id', $data_booking_id)->first();
        $cekPackage = Package::where('id', $data_cekstatus->package_id)->first();
        if ($cekPackage->session_usage == null) {
            $data_list = DB::table('booking_details as c')
                ->where('c.booking_id', $data_booking_id)
                ->leftJoin('packages as d', 'c.package_id', '=', 'd.id')
                ->leftJoin('stables as e', 'd.stable_id', '=', 'e.id')
                ->select('d.session_usage', 'c.booking_at', 'c.queue_no', 'd.name', 'session_usage', 'e.name as stable_name', 'c.price_subtotal')->get();
            
            $status_booking = Booking::select('*')->where('id', $data_booking_id)->first();
            $booking_detail = BookingDetail::select('*')->where('booking_id', $data_booking_id)->get();
            $data_payment = DB::table('bank_payments')->where('id', $status_booking->bank_payment_id)->first();
            $count_booking = count($booking_detail);
            $slot_user = null;
            
            if ($count_booking > 1) {
                $booking_detail = BookingDetail::All()->where('booking_id', $data_booking_id)->max();
            } else {
                $booking_detail = BookingDetail::All()->where('booking_id', $data_booking_id)->first();
            }
            return view('riding_class.history-pay-confirmasi', compact('data_list', 'data_booking_id', 'status_booking', 'booking_detail', 'data_payment', 'count_booking', 'cekPackage'));
        } else {
            $data_list = DB::table('slot_users as a')
                ->select(
                    'b.date',
                    'b.time_start',
                    'b.time_end',
                    'd.name',
                    'session_usage',
                    'e.id as stable_id',
                    'e.name as stable_name',
                    'coaches.id as coach_id',
                    'coaches.name as coach_name',
                    'horses.id as horse_id',
                    'horses.name as horse_name',
                    'a.qr_code_status',
                    'a.qr_code',
                    'a.id as slot_user_id',
                    'a.slot_id as slot_id'
                )
                ->where('c.booking_id', $data_booking_id)
                ->leftJoin('slots as b', 'b.id', '=', 'a.slot_id')
                ->leftJoin('booking_details as c', 'a.booking_detail_id', '=', 'c.id')
                ->leftJoin('packages as d', 'c.package_id', '=', 'd.id')
                ->leftJoin('stables as e', 'd.stable_id', '=', 'e.id')
                ->leftJoin('coaches', 'coaches.id', '=', 'a.coach_id')
                ->leftJoin('horses', 'horses.id', '=', 'a.horse_id')
                ->get();
                
            
                
            $status_booking = Booking::select('*')->where('id', $data_booking_id)->first();
            $booking_detail = BookingDetail::select('*')->where('booking_id', $data_booking_id)->first();
            $package = Package::select('*')->where('id', $booking_detail->package_id)->first();
            $data_payment = DB::table('bank_payments')->where('id', $status_booking->bank_payment_id)->first();
            $slot_user = DB::table('slot_users')->where('booking_detail_id', $booking_detail->id)->get();
            $slots = Slot::where('user_id', $package->user_id)->get();
            $check_schedule = SlotUser::where('booking_detail_id', $booking_detail->id)->where('qr_code_status', 'Reschedule')->first();


            $data_list_dua = SlotUser::where('booking_detail_id', $booking_detail->id)->where('qr_code_status', '!=', 'Reschedule')->get();
            // return response()->json($data_list_dua);die;
            foreach($data_list_dua as $item){
                if($item->horse_id && $item->coach_id){
                    $data_list_dua = SlotUser::where('booking_detail_id', $booking_detail->id)->where('qr_code_status', '!=', 'Reschedule')->get();
                }else{
                    $data_list_dua = null;
                }
            }

            return view('riding_class.history-pay-confirmasi', compact('data_list', 'data_list_dua', 'data_booking_id', 'status_booking', 'booking_detail', 'data_payment', 'cekPackage', 'check_schedule', 'slot_user', 'slots'));
        }
    }

    public function get_slot(Request $request)
    {
        if ($request->ajax()) {
            $slot = Slot::where('date', $request->date)->where('user_id', $request->id)->get();
            return response()->json($slot);
        }
    }

    public function reschedule(Request $request)
    {
        DB::beginTransaction();
        $booking_detail = BookingDetail::find(Crypt::decryptString($request->bkid));        
        $booking = Booking::find($booking_detail->booking_id);

        if ($booking->user_id != $request->uid) {
            Alert::error('Reschedule Error.', 'Check your own data.');
            return redirect()->back();
        }

        $check = Package::find($booking_detail->package_id);
        if ($check->session_usage == null) {
            $booking_detail->queue_status = 'Reschedule';
            $booking_detail->update();

            if (!$booking_detail) {
                DB::rollback();
                Alert::error('Reschedule Error.', 'Check your own data 1.');
                return redirect()->back();
            }

            $noUrutAkhir = BookingDetail::where('package_id', $check->id)->whereDate('booking_at', '=', Carbon::parse($request->date)->toDateString())->max('queue_no');
            if ($noUrutAkhir) {
                $noUrutAkhir  = sprintf("%03s", abs($noUrutAkhir + 1));
            } else {
                $noUrutAkhir = sprintf("%03s", 1);
            }
            $Query1 = new BookingDetail();
            $Query1->package_id = $booking_detail->package_id;
            $Query1->price_subtotal = $booking_detail->price_subtotal;
            $Query1->booking_id = $booking_detail->booking_id;
            $Query1->queue_no = $noUrutAkhir;
            if (date('Y-m-d', strtotime($booking_detail->booking_at)) == Carbon::parse($request->date)->toDateString()) {
                DB::rollback();
                Alert::error('Reschedule Error.', 'Cannot choose same date.');
                return redirect()->back();
            }
            $Query1->booking_at = Carbon::parse($request->date)->toDateString();

            $Query1->save();

            if (!$Query1) {
                DB::rollback();
                Alert::error('Reschedule Error.', 'Check your own data 2.');
                return redirect()->back();
            }
            
            $image = QrCode::format('png')
                ->size(200)
                ->generate(url("/booking-detail/$Query1->id/confirmation"));

            $output_file = '/img/qr-code/img-' . time() . $Query1->id .'.png';

            Storage::disk('public')->put($output_file, $image);

            $Query1->qr_code = $output_file;
            $Query1->update();

            if (!$Query1) {
                DB::rollback();
                Alert::error('Reschedule Error.', 'Check your own data 3.');
                return redirect()->back();
            }
            if ($Query1) {
                DB::commit();
                Alert::success('Reschedule Success.', 'Success.')->persistent(true)->autoClose(3600);
                return redirect()->back();
            }
        }
        else{
            $slot_user = SlotUser::where('id', Crypt::decryptString($request->id))->first();
            $slot_user->qr_code_status = 'Reschedule';

            $slot_user->update();

            $slot = Slot::find($slot_user->slot_id);
            $slotCapacity = $slot->capacity_booked - 1;
            $slot->capacity_booked = $slotCapacity;
            $slot->update();

            if (!$slot_user) {
                DB::rollback();
                Alert::error('Reschedule Error.', 'Check your own data 1.');
                return redirect()->back();
            }
            
            $Query = new SlotUser();
            $start = substr($request->time,0,8);
            $end = substr($request->time,9);
            $slotID = Slot::where('user_id', $slot->user_id)->where('date', $request->date)
            ->where('time_start', $start)->where('time_end', $end)->first();
            if($slot->id == $slotID->id)
            {
                DB::rollback();
                Alert::error('Reschedule Error.', 'Cannot choose same date and time.');
                return redirect()->back();
            }
            $Query->slot_id = $slotID->id;
            $Query->user_id = Auth::user()->id;
            $Query->booking_detail_id = $booking_detail->id;
            $Query->qr_code_status = null;
            $Query->save();
            if (!$Query) {
                DB::rollback();
                Alert::error('Reschedule Error.', 'Check your own data 2.');
                return redirect()->back();
            }
            
            $image = QrCode::format('png')
                ->size(200)
                ->generate(url("/booking-detail/$booking_detail->id/confirmation"));

            $output_file = '/img/qr-code/img-' . time() . $booking_detail->id . $Query->id . '.png';

            Storage::disk('public')->put($output_file, $image);

            $Query->qr_code = $output_file;
            $Query->update();

            if (!$Query) {
                DB::rollback();
                Alert::error('Reschedule Error.', 'Check your own data 3.');
                return redirect()->back();
            }

            $slot = Slot::find($slotID->id);
            $slotCapacity = $slot->capacity_booked + 1;
            $slot->capacity_booked = $slotCapacity;
            $slot->update();

            if (!$slot) {
                DB::rollback();
                Alert::error('Reschedule Error.', 'Check your own data 4.');
                return redirect()->back();
            }
            DB::commit();
            Alert::success('Reschedule Success.', 'Success.')->persistent(true)->autoClose(3600);
            return redirect()->route('riding_class.history.order');
        }
    }

    public function slot_user(Request $request)
    {
        $slot_user = DB::table('slot_users')->where('id', Crypt::decryptString($request->id))->first();
        $booking_detail = BookingDetail::where('id', $slot_user->booking_detail_id)->first();
        $slot_users = DB::table('slot_users')->where('booking_detail_id', $booking_detail->id)->get();
        $package = DB::table('packages')->where('id', $booking_detail->package_id)->first();
        $slots = DB::table('slots')->where('id', $slot_user->slot_id)->first();
        $slot = DB::table('slots')->select('date', 'user_id')->where('user_id', $package->user_id)->groupBy('date', 'user_id')->orderBy('date', 'asc')->get();
        return view('riding_class.reschedule', compact('slot_users', 'slot_users', 'booking_detail', 'slot', 'slots', 'package'));
    }
}
