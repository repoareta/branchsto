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

    public function booking_payment(Request $request, Booking $booking, BookingDetail $bookingdetail)
    {
        session()->forget("data_list_slot");
        session()->forget("data_list_package");       
         
        $booking->user_id     = Auth::user()->id;
        $booking->price_total = $request->price_total;
        $booking->save();

        $data = $request->all();
        foreach ($data['slot_id'] as $item => $value) {
            if (!$data['slot_id'][$item] == null) {
                $data2 = array(
                    'package_id'        => $request->package_id,
                    'price_subtotal'    => $data['price_subtotal'][$item],
                    'booking_id'        => $booking->id,
                );
                BookingDetail::create($data2);
            }
        }

        Alert::success('Booking Package Success.', 'Success.')->persistent(true)->autoClose(3600);
        return view('riding_class.history-pay');       
    }
    public function booking_detail(Request $request)
    {
        return view('riding_class.payment',compact('data'));

    }
    public function history_order()
    {
        $data= Http::get('http://185.201.9.73/branchsto/public/api/stable-by-user/'.Auth::user()->id)->json();
        $data= Http::get('http://185.201.9.73/branchsto/public/api/stable-by-user/'.Auth::user()->id)->json();
        return view('riding_class.history_order',compact('data'));
    }
    public function booking_list_qrcode()
    {
        $data= Http::get('http://185.201.9.73/branchsto/public/api/package')->json();
        return view('riding_class.booking-detail',compact('data'));
    }
}
