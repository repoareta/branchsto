<?php

namespace App\Http\Controllers\AppOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

// load model
use App\Models\Stable;
class StableApprovalController extends Controller
{
    public function index()
    {
        return view('app-owner.stable-approval');
    }
    public function listJsonApprov()
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
            <form class='d-inline' id='formAccept' method='post' action='" . route('stable_approval.approv.stable',$data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-success text-center mr-2' type='submit' id='accept' data-toggle='Accept' data-placement='top' title='Accept'>
                    <i class='fas fa-check-circle'></i>
                </button>
            </form>
            <form class='d-inline' id='formDecline' method='post' action='" . route('stable_approval.unapprov.stable',$data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-danger text-center mr-2' type='submit' id='decline' data-toggle='Decline' data-placement='top' title='Decline'>
                <i class='fas fa-ban'></i>
                </button>
            </form>
            ";
        })
        ->rawColumns(['no','action'])
        ->make(true);
    }

    public function detailStable($id)
    {
        $stable = Stable::find($id);
        return response()->json($stable);
    }

    public function approvStable($id)
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
    public function unapprovStable($id)
    {
        // $stable = Stable::find($request->id);
        // $stable->status = date('Y-m-d H:i:s');
        // $stable->save();
        return response()->json(200);
    }
}
