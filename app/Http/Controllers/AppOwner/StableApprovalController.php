<?php

namespace App\Http\Controllers\AppOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $data = Stable::all();
        return datatables()->of($data)
        ->addColumn('profile', function ($data) {
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
        $data = Stable::all();
        return datatables()->of($data)
        ->addColumn('profile', function ($data) {
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

    public function detailStable(Request $request)
    {
        $data = Stable::find($request->id);
        return response()->json($data, 200);
    }

    public function approvStable(Request $request)
    {
        // $stable = Stable::find($request->id);
        // $stable->status = date('Y-m-d H:i:s');
        // $stable->save();
        return response()->json(200);
    }
    public function unapprovStable(Request $request)
    {
        // $stable = Stable::find($request->id);
        // $stable->status = date('Y-m-d H:i:s');
        // $stable->save();
        return response()->json(200);
    }
}
