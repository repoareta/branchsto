<?php

namespace App\Http\Controllers\AppOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $data = Package::with(['stable'])->get();
        return datatables()->of($data)
        ->addColumn('profile', function ($data) {
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
        ->addColumn('action', function ($data) {
            return 
            "
            <a href='#' class='btn btn-info text-center mr-2' data-id='".$data->id."' id='openDetail'>
                <i class='fas fa-eye'></i>
            </a>
            <a href='#' class='btn btn-success text-center mr-2' data-id='".$data->id."' id='approv-stable'>
                <i class='fas fa-check-circle'></i>
            </a>
            <a href='#' class='btn btn-danger text-center mr-2' data-id='".$data->id."' id='unapprov-stable'>
                <i class='fas fa-ban'></i>
            </a>
            ";
        })
        ->rawColumns(['profile','action'])
        ->make(true);
    }
    public function listJsonUnapprov()
    {
        $data = Package::with(['stable'])->get();
        return datatables()->of($data)
        ->addColumn('profile', function ($data) {
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
        ->addColumn('action', function ($data) {
            return 
            "
            <a href='#' class='btn btn-info text-center mr-2' data-id='".$data->id."' id='openDetail'>
                <i class='fas fa-eye'></i>
            </a>
            ";
        })
        ->rawColumns(['profile','action'])
        ->make(true);
    }

    public function detailPackage(Request $request)
    {
        $data = Package::with(['stable'])->find($request->id);
        return response()->json($data, 200);
    }

    public function approvPackage(Request $request)
    {
        // $package = Package::find($request->id);
        // $package->status = date('Y-m-d H:i:s');
        // $package->save();
        return response()->json(200);
    }
    public function unapprovPackage(Request $request)
    {
        // $package = Package::find($request->id);
        // $package->status = date('Y-m-d H:i:s');
        // $package->save();
        return response()->json(200);
    }
}
