<?php

namespace App\Http\Controllers\AppOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

// load model
use App\Models\Booking;
class UserPaymentApprovalController extends Controller
{
    public function index()
    {
        return view('app-owner.user-payment');
    }
    public function listJsonApprov()
    {
        $data = Booking::where('approval_status', 'Accepted')->get();
        return datatables()->of($data)
        ->addColumn('no', function () {
            return "";
        })
        ->addColumn('name', function ($data) {
            return $data->user_id;
        })        
        ->editColumn('photo', function ($data) {
            return $data->photo ? '
                <a href="' . Storage::url($data->photo) . '" target="_blank"><img src="' . Storage::url($data->photo) . '" style="max-width: 200px"></a>
            ' : '';
        })
        ->addColumn('approval_status', function ($data) {
            return $data->approval_status;
        })
        ->addColumn('bank', function ($data) {
            return $data->bank_payment_id;
        })
        ->addColumn('action', function ($data) {
            return 
            "
            <a href='javascript:void(0)' data-toggle='modal' data-id='".$data->id."' class='btn btn-info text-center mr-2' id='openBtn'>
                <i class='fas fa-eye'></i>
            </a>
            ";
        })
        
        ->rawColumns(['no','photo','action'])
        ->make(true);
    }
    public function listJsonUnapprov()
    {
        $data = Booking::where('approval_status', null)->get();
        return datatables()->of($data)
        ->addColumn('no', function () {
            return "";
        })
        ->addColumn('name', function ($data) {
            return $data->user_id;
        })        
        ->editColumn('photo', function ($data) {
            return $data->photo ? '
                <a href="' . Storage::url($data->photo) . '" target="_blank"><img src="' . Storage::url($data->photo) . '" style="max-width: 200px"></a>
            ' : '';
        })
        ->addColumn('approval_status', function ($data) {
            return 'Pending';
        })
        ->addColumn('bank', function ($data) {
            return $data->bank_payment_id;
        })
        ->addColumn('action', function ($data) {
            return 
            "
            <a href='javascript:void(0)' data-toggle='modal' data-id='".$data->id."' class='btn btn-info text-center mr-2' id='openBtn' data-toggle='Detail' data-placement='top' title='Detail'>
                <i class='fas fa-eye'></i>
            </a>
            <form class='d-inline' id='formAccept' method='post' action='" . route('owner.userpayment.approv.booking',$data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-success text-center mr-2' id='accept' type='submit'  data-toggle='Accept' data-placement='top' title='Accept'>
                    <i class='fas fa-check-circle'></i>
                </button>
            </form>
            <form class='d-inline' id='formDecline' method='post' action='" . route('owner.userpayment.unapprov.booking',$data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-danger text-center mr-2' id='decline' type='submit'  data-toggle='Decline' data-placement='top' title='Decline'>
                <i class='fas fa-ban'></i>
                </button>
            </form>
            ";
        })
        ->rawColumns(['no','photo','action'])
        ->make(true);
    }

    public function detailBooking($id)
    {
        $booking = Booking::find($id);
        return response()->json($booking);
    }

    public function approvBooking($id)
    {
        $data = Booking::find($id);
        Booking::where('id', $data->id)->update([
            'approval_status' => 'Accepted', 
            'approval_by' => Auth::user()->id,
            'approval_at' => Carbon::now()
        ]);

        Alert::success($data->name.' Accepted', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->back();
    }
    public function unapprovBooking($id)
    {
        $data = Booking::find($id);
        Booking::where('id', $data->id)->update([
            'approval_status' => 'Decline', 
            'approval_by' => Auth::user()->id,
            'approval_at' => Carbon::now()
        ]);

        Alert::success($data->name.' Decline', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->back();
    }
}
