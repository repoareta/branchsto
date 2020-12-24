<?php

namespace App\Http\Controllers\AppOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

// load model
use App\Models\Package;
class PackageApprovalController extends Controller
{
    public function index()
    {
        return view('app-owner.package-approval');
    }
    public function listJsonApprov()
    {
        $data = Package::with(['stable'])->where('approval_status', 'Accepted')->get();
        return datatables()->of($data)
        ->addColumn('no', function ($data) {
            return "<img src='assets/media/branchsto/horse.png' width='40px' height='40px' alt=''>";
        })
        ->addColumn('stable_name', function ($data) {
            return $data->stable->name;
        })
        ->addColumn('package_name', function ($data) {
            return $data->name;
        })
        ->addColumn('price', function ($data) {
            return $data->price;
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
        $data = Package::with(['stable'])->where('approval_status', null)->get();
        return datatables()->of($data)
        ->addColumn('no', function () {
            return "<img src='assets/media/branchsto/horse.png' width='40px' height='40px' alt=''>";
        })
        ->addColumn('stable_name', function ($data) {
            return $data->stable->name;
        })
        ->addColumn('package_name', function ($data) {
            return $data->name;
        })
        ->addColumn('price', function ($data) {
            return $data->price;
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
            <form class='d-inline' id='formAccept' method='post' action='" . route('package_approval.approv.package',$data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-success text-center mr-2' id='accept' type='submit'  data-toggle='Accept' data-placement='top' title='Accept'>
                    <i class='fas fa-check-circle'></i>
                </button>
            </form>
            <form class='d-inline' id='formDecline' method='post' action='" . route('package_approval.unapprov.package',$data->id) . "'>
            " . method_field('PATCH') . csrf_field() . "
                <button class='btn btn-danger text-center mr-2' id='decline' type='submit'  data-toggle='Decline' data-placement='top' title='Decline'>
                <i class='fas fa-ban'></i>
                </button>
            </form>
            ";
        })
        ->rawColumns(['no','action'])
        ->make(true);
    }

    public function detailPackage($id)
    {
        $package = Package::with(['stable','approvalby_package','user'])->find($id);
        dd($package);die;
        return response()->json($package);
    }

    public function approvPackage(Request $request, $id)
    {
        $data = Package::find($id);
        Package::where('id', $data->id)->update([
            'approval_status' => 'Accepted', 
            'approval_by' => Auth::user()->id,
            'approval_at' => Carbon::now()
        ]);

        Alert::success($data->name.' Accepted', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->back();
    }
    public function unapprovPackage(Request $request, $id)
    {
        $data = Package::find($id);
        Package::where('id', $data->id)->update([
            'approval_status' => 'Decline', 
            'approval_by' => Auth::user()->id,
            'approval_at' => Carbon::now()
        ]);

        Alert::success($data->name.' Decline', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->back();
    }
}
