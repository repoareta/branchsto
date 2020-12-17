<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

class RidingClassController extends Controller
{
    public function search_list_class(Request $request)
    {
        $datas= Http::get('http://185.201.9.73/branchsto/public/api/package');
        $data=[];
        foreach($datas['data'] as $row)
        {
            $data[] = $row;
        }
        return view('riding_class.list-package',compact('data'));
    }
    public function booking_class(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        $data= Http::get('http://185.201.9.73/branchsto/public/api/package/'.$id)->json();
        $data_list = [
            'id'            => $data['data']['id'],      
            'name'          => $data['data']['name'],
            'description'   => $data['data']['description'],
            'price'         => $data['data']['price']
        ];
        if (session('data_list')) {
            session()->push('data_list', $data_list);
        } else {
            session()->put('data_list', []);
            session()->push('data_list', $data_list);
        }
       
        return redirect()->route('riding_class.booking.addCart');
    }
    public function addToCart(Request $request)
    {
        // session()->forget("data_list");

        $list_detail = session('data_list');
        return view('riding_class.booking-package',compact('list_detail'));
    }

    public function booking_payment(Request $request)
    {
        if(session('data_list')){
            $status = Http::post('http://185.201.9.73/branchsto/public/api/booking',[
                'user_id'     => Auth::user()->id,
                'price_total' => $request->price_total,
            ]); 
            $booking_id = $status['data']['id'];        
            $list_details = session('data_list');
            foreach ($list_details as $row) {
                $status = Http::post('http://185.201.9.73/branchsto/public/api/booking-detail', [
                    'package_id'     => $row['id'],
                    'booking_id'     => $booking_id,
                    'price_subtotal' => $row['price'],
                ]);
            }
            if ($status->getStatusCode() == 200) {
                session()->forget("data_list");
                Alert::success('Chackout Data Success.', 'Success.')->persistent(true)->autoClose(3600);
                return redirect()->route('riding_class.booking.detail',['id' => Crypt::encryptString($booking_id)]);
            }else{
                Alert::info('Chackout Data Failed.', 'Try Again.')->persistent(true)->autoClose(3600);
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }  
    }
    public function booking_detail(Request $request)
    {
        // $d = Crypt::decryptString($request->id);
        // dd($d);
        $data= Http::get('http://185.201.9.73/branchsto/public/api/booking/'.Crypt::decryptString($request->id));
        return view('riding_class.payment',compact('data'));

    }
    public function booking_list_qrcode()
    {
        $data= Http::get('http://185.201.9.73/branchsto/public/api/package/'.$id)->json();
        return view('riding_class.booking-detail',compact('data'));
    }
    public function history_order()
    {
        $data= Http::get('http://185.201.9.73/branchsto/public/api/stable-by-user/'.Auth::user()->id)->json();
        return view('riding_class.history_order',compact('data'));
    }
}
