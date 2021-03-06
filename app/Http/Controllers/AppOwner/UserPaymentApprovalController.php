<?php

namespace App\Http\Controllers\AppOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Mail\SendNotifUserPaymentApproveMail;

// load model
use App\Models\Booking;
use App\Models\Package;
use App\Models\Stable;
use App\Models\User;
use App\Models\BookingDetail;

// load plugin
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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
            return $data->user->name;
        })        
        ->editColumn('photo', function ($data) {
            return $data->photo ? '
                <a href="' . asset('storage/booking/photo/'.$data->photo) . '" target="_blank"><img src="' . asset('storage/booking/photo/'.$data->photo) . '" style="max-width: 100px"></a>
            ' : '';
        })
        ->addColumn('approval_status', function ($data) {
            return $data->approval_status;
        })
        ->addColumn('bank', function ($data) {
            return $data->bank->account_name;
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
            return $data->user->name;
        })        
        ->editColumn('photo', function ($data) {
            return $data->photo ? '
                <a href="' . asset('storage/booking/photo/'.$data->photo) . '" target="_blank"><img src="' . asset('storage/booking/photo/'.$data->photo) . '" style="max-width: 100px"></a>
            ' : '';
        })
        ->addColumn('approval_status', function ($data) {
            return 'Pending';
        })
        ->addColumn('bank', function ($data) {
            return $data->bank->account_name;
        })
        ->addColumn('action', function ($data) {
            return
            "
            <a href='javascript:void(0)' data-toggle='modal' data-id='".$data->id."' class='btn btn-info text-center mr-2' id='openBtn' data-toggle='Detail' data-placement='top' title='Detail'>
                <i class='fas fa-eye'></i>
            </a>
            <form class='d-inline' id='formAccept".$data->id."' method='post' action='" . route('owner.userpayment.approv.booking', $data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-success text-center mr-2' id='accept".$data->id."' type='submit'  data-toggle='Accept' data-placement='top' title='Accept'>
                    <i class='fas fa-check-circle'></i>
                </button>
            </form>
            <form class='d-inline' id='formDecline".$data->id."' method='post' action='" . route('owner.userpayment.unapprov.booking', $data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-danger text-center mr-2' id='decline".$data->id."' type='submit'  data-toggle='Decline' data-placement='top' title='Decline'>
                <i class='fas fa-ban'></i>
                </button>
            </form>

            <script>
            $('tbody').on('click','#accept".$data->id."', function(e) {
    
                e.preventDefault();
                    
                Swal.fire({
                    title: 'Are you sure?',
                    icon: 'warning',
                    text: 'This is will be accepted the stable',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Accept',
                    cancelButtonText: 'Cancel',
                    closeOnConfirm: false,
                    closeOnCancel: false
                }).then(function(getAction) {
                    if (getAction.value === true) {
                        $('#formAccept".$data->id."').submit();
                    }
                });
            });

            $('tbody').on('click','#decline".$data->id."', function(e) {
    
                e.preventDefault();
                    
                Swal.fire({
                    title: 'Are you sure?',
                    icon: 'warning',
                    text: 'This is will be declined the stable',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Accept',
                    cancelButtonText: 'Cancel',
                    closeOnConfirm: false,
                    closeOnCancel: false
                }).then(function(getAction) {
                    if (getAction.value === true) {
                        $('#formDecline".$data->id."').submit();
                    }
                });
            });
            </script>   
            ";
        })
        ->rawColumns(['no','photo','action'])
        ->make(true);
    }

    public function detailBooking($id)
    {
        $booking = Booking::with(['bank','user','approvalby_booking', 'booking_detail'])->find($id);
        $bookingDetail = BookingDetail::with(['package'])->where('booking_id', $id)->first();
        $stable = Stable::find($bookingDetail->package->stable_id);
        $data = [
            $booking,
            $bookingDetail,
            $stable
        ];
        return response()->json($data);
    }

    public function approvBooking($id)
    {
        $data = Booking::find($id);
        Booking::where('id', $data->id)->update([
                'approval_status' => 'Accepted',
                'approval_by' => Auth::user()->id,
                'approval_at' => Carbon::now()
            ]);
        $bookingDetail = $data->booking_detail;
        $cek_package = Package::find($bookingDetail->package_id);            
        if($cek_package->session_usage == null){
            $image = QrCode::format('png')
                ->size(200)
                ->generate(url("/booking-detail/$bookingDetail->id/confirmation"));

            $output_file = '/img/qr-code/img-' . time() . $bookingDetail->id . '.png';

            Storage::disk('public')->put($output_file, $image);

            $bookingDetail->qr_code = $output_file;
            $bookingDetail->save();
        }else{
            
            $slot_user = DB::table('slot_users')
            ->where('booking_detail_id', $bookingDetail->id)
            ->get();
            
            foreach($slot_user as $user){
                $image = QrCode::format('png')
                    ->size(200)
                    ->generate(url("/booking-detail/$bookingDetail->id/confirmation"));

                $output_file = '/img/qr-code/img-' . time() . $bookingDetail->id . $user->id . '.png';

                Storage::disk('public')->put($output_file, $image);

                DB::table('slot_users')->where('id',$user->id)->update([
                    'qr_code' => $output_file
                ]);

                $user = User::find($data->user_id);
                
                $user->notify(new SendNotifUserPaymentApproveMail($cek_package));
            }                
        }

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
