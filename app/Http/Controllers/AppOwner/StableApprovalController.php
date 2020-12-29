<?php

namespace App\Http\Controllers\AppOwner;

use App\Http\Controllers\Controller;
use App\Mail\SendKeyStableMail;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

// load model
use App\Models\Stable;
use App\Models\User;
use App\Models\Province;
use App\Models\City;
use App\Models\District;
use App\Models\Village;
class StableApprovalController extends Controller
{
    public function index()
    {
        return view('app-owner.stable-approval');
    }
    public function listJsonApprov()
    {
        $data = Stable::where('approval_status', 'Email Sent')->get();
        return datatables()->of($data)
        ->addColumn('no', function () {
            return "<img src='assets/media/branchsto/horse.png' width='40px' height='40px' alt=''>";
        })
        ->addColumn('stable_name', function ($data) {
            return $data->name;
        })
        ->addColumn('owner', function ($data) {
            return $data->owner;
        })
        ->addColumn('contact_person', function ($data) {
            return $data->contact_person;
        })
        ->addColumn('contact_number', function ($data) {
            return $data->contact_number;
        })
        ->addColumn('date_created', function ($data) {
            return $data->created_at;
        })
        ->addColumn('approval_status', function ($data) {
            return $data->approval_status;
        })
        ->addColumn('action', function ($data) {
            return 
            "
            <a href='javascript:void(0)' data-toggle='modal' data-id='".$data->id."' class='btn btn-info text-center mr-2' id='openBtn'>
                <i class='fas fa-eye'></i>
            </a>
            ";
        })
        ->rawColumns(['no','action'])
        ->make(true);
    }
    public function listJsonUnapprov()
    {
        $data = Stable::where('approval_status', null)->get();
        return datatables()->of($data)
        ->addColumn('no', function () {
            return "<img src='assets/media/branchsto/horse.png' width='40px' height='40px' alt=''>";
        })
        ->addColumn('stable_name', function ($data) {
            return $data->name;
        })
        ->addColumn('owner', function ($data) {
            return $data->owner;
        })
        ->addColumn('contact_person', function ($data) {
            return $data->contact_person;
        })
        ->addColumn('contact_number', function ($data) {
            return $data->contact_number;
        })
        ->addColumn('date_created', function ($data) {
            return $data->created_at;
        })
        ->addColumn('approval_status', function ($data) {
            return 'Pending';
        })
        ->addColumn('action', function ($data) {
            return 
            "
            <a href='javascript:void(0)' data-toggle='modal' data-id='".$data->id."' class='btn btn-info text-center mr-2' id='openBtn' data-toggle='Detail' data-placement='top' title='Detail'>
                <i class='fas fa-eye'></i>
            </a>
            <form class='d-inline' id='formAccept".$data->id."' method='post' action='" . route('stable_approval.approv.stable',$data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-success text-center mr-2' type='submit' id='accept".$data->id."' data-toggle='Accept' data-placement='top' title='Accept'>
                    <i class='fas fa-check-circle'></i>
                </button>
            </form>
            <form class='d-inline' id='formDecline".$data->id."' method='post' action='" . route('stable_approval.unapprov.stable',$data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-danger text-center mr-2' type='submit' id='decline".$data->id."' data-toggle='Decline' data-placement='top' title='Decline'>
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
        ->rawColumns(['no','action'])
        ->make(true);
    }

    public function detailStable($id)
    {
        $stable = Stable::with(['approvalby_stable'])->find($id);
        $province = Province::find($stable->province_id);
        $city = City::find($stable->city_id);
        $district = District::find($stable->district_id);
        $village = Village::find($stable->village_id);
        return response()->json([$stable,[$province,$city,$district,$village]]);
    }

    public function approvStable($id)
    {
        $data = Stable::find($id);

        $user = User::where('id', $data->user_id)->first();
                    $user->notify(new SendKeyStableMail($data));

        Stable::where('id', $data->id)->update([
            'approval_status' => 'Email Sent', 
            'approval_by' => Auth::user()->id,
            'approval_at' => Carbon::now()
        ]);
        Alert::success($data->name.' Email Sent', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->back();
    }
    public function unapprovStable($id)
    {
        $data = Stable::find($id);
        Stable::where('id', $data->id)->update([
            'approval_status' => 'Decline', 
            'approval_by' => Auth::user()->id,
            'approval_at' => Carbon::now()
        ]);

        Alert::success($data->name.' Decline', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->back();
    }


    // Stable Approval 2
    public function index2()
    {
        return view('app-owner.stable-approval2');
    }
    public function listJsonApprov2()
    {
        $data = Stable::where('approval_status', 'Accepted')->get();
        return datatables()->of($data)
        ->addColumn('no', function () {
            return "<img src='assets/media/branchsto/horse.png' width='40px' height='40px' alt=''>";
        })
        ->addColumn('stable_name', function ($data) {
            return $data->name;
        })
        ->addColumn('owner', function ($data) {
            return $data->owner;
        })
        ->addColumn('contact_person', function ($data) {
            return $data->contact_person;
        })
        ->addColumn('contact_number', function ($data) {
            return $data->contact_number;
        })
        ->addColumn('date_created', function ($data) {
            return $data->created_at;
        })
        ->addColumn('approval_status', function ($data) {
            return $data->approval_status;
        })
        ->addColumn('action', function ($data) {
            return 
            "
            <a href='javascript:void(0)' data-toggle='modal' data-id='".$data->id."' class='btn btn-info text-center mr-2' id='openBtn'>
                <i class='fas fa-eye'></i>
            </a>
            ";
        })
        ->rawColumns(['no','action'])
        ->make(true);
    }
    public function listJsonUnapprov2()
    {
        $data = Stable::where('approval_status', 'Email Sent')->get();
        return datatables()->of($data)
        ->addColumn('no', function () {
            return "<img src='assets/media/branchsto/horse.png' width='40px' height='40px' alt=''>";
        })
        ->addColumn('stable_name', function ($data) {
            return $data->name;
        })
        ->addColumn('owner', function ($data) {
            return $data->owner;
        })
        ->addColumn('contact_person', function ($data) {
            return $data->contact_person;
        })
        ->addColumn('contact_number', function ($data) {
            return $data->contact_number;
        })
        ->addColumn('date_created', function ($data) {
            return $data->created_at;
        })
        ->addColumn('approval_status', function ($data) {
            return $data->approval_status;
        })
        ->addColumn('action', function ($data) {
            return 
            "
            <a href='javascript:void(0)' data-toggle='modal' data-id='".$data->id."' class='btn btn-info text-center mr-2' id='openBtn' data-toggle='Detail' data-placement='top' title='Detail'>
                <i class='fas fa-eye'></i>
            </a>
            <form class='d-inline' id='formAccept".$data->id."' method='post' action='" . route('stable_approval2.approv.stable',$data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-success text-center mr-2' type='submit' id='accept".$data->id."' data-toggle='Accept' data-placement='top' title='Accept'>
                    <i class='fas fa-check-circle'></i>
                </button>
            </form>
            <form class='d-inline' id='formDecline".$data->id."' method='post' action='" . route('stable_approval2.unapprov.stable',$data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-danger text-center mr-2' type='submit' id='decline".$data->id."' data-toggle='Decline' data-placement='top' title='Decline'>
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
        ->rawColumns(['no','action'])
        ->make(true);
    }

    public function detailStable2($id)
    {
        $stable = Stable::with(['approvalby_stable'])->find($id);
        $province = Province::find($stable->province_id);
        $city = City::find($stable->city_id);
        $district = District::find($stable->district_id);
        $village = Village::find($stable->village_id);
        return response()->json([$stable,[$province,$city,$district,$village]]);
    }

    public function approvStable2($id)
    {
        $data = Stable::find($id);
        Stable::where('id', $data->id)->update([
            'approval_status' => 'Accepted', 
            'approval_by' => Auth::user()->id,
            'approval_at' => Carbon::now()
        ]);

        Alert::success($data->name.' Accepted', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->back();
    }
    public function unapprovStable2($id)
    {
        $data = Stable::find($id);
        Stable::where('id', $data->id)->update([
            'approval_status' => 'Decline', 
            'approval_by' => Auth::user()->id,
            'approval_at' => Carbon::now()
        ]);

        Alert::success($data->name.' Decline', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->back();
    }
}
