<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

// load model
use App\Models\Package;
use App\Models\Stable;

//load form request (for validation
use Illuminate\Support\Facades\File;
use App\Http\Requests\PackageStore;
class PackageController extends Controller
{
    public function index()
    {
        return view('package.index');
    }
    public function listJson()
    {
        $data = Package::where('user_id', Auth::user()->id)->with(['user']);
        return datatables()->of($data)
            ->addColumn('profile', function ($data) {
                return "<img src='assets/media/branchsto/horse.png' width='40px' height='40px' alt=''>";
            })
            ->addColumn('price', function ($data) {
                return number_format($data->price);
            })
            ->addColumn('approval_status', function ($data) {
            
                if($data->approval_status == null){
                    return "<span class='label label-lg label-light-warning label-inline'>Pending.</span>";
                }else{
                    return "<span class='label label-lg label-light-success label-inline'>".$data->approval_status.".</span>";
                }
            })
            ->addColumn('package_status', function ($data) {
            
                if($data->package_status == null){
                    return "<span class='label label-lg label-light-danger label-inline'>No Publish.</span>";
                }else{
                    return "<span class='label label-lg label-light-success label-inline'>".$data->approval_status.".</span>";
                }
            })
            ->addColumn('action', function ($data) {
                return 
                "<a href='javascript:void(0)' class='btn btn-info text-center mr-2' >
                    <i class='fas fa-pen edit-package pointer-link' data-id='".Crypt::encryptString($data->id)."'></i>
                </a>
                <a href='javascript:void(0)' class='btn btn-danger text-center mr-2' >
                    <i class='fas fa-trash delete-package pointer-link' data-id='".$data->id."'></i>
                </a>
                ";
            })
            ->rawColumns(['profile','action','approval_status','package_status'])
            ->make(true);
    }
    public function create()
    {
        $data_stable = Stable::with(['user','package'])->where('user_id', Auth::user()->id)->first();
        if($data_stable->capacity_of_stable > 0 and  $data_stable->number_of_coach > 0 and $data_stable->capacity_of_arena > 0){
            if($data_stable->package->where('stable_id', $data_stable->id)->where('user_id', $data_stable->user_id)->count() < $data_stable->capacity_of_stable){
                $data = 1;
            }else{
                $data = 0;
            };
        }else{
            $data = 0;
        }
        return view('package.create',compact('data','data_stable'));
    }
    public function store(Request $request, Package $package)
    {
        $package->package_number = $request->package_number;
        $package->attendance     = $request->attendance;
        $package->name           = $request->name;
        $package->description    = $request->description;
        $package->price          = $request->price;
        $package->user_id        = Auth::user()->id;
        $package->stable_id      = $request->stable_id;
        $package->session_usage  = $request->session;      
        $package->package_status = $request->status;      
        if ($request->file('photo')) {
            $package->photo = $request->file('photo')->getClientOriginalName();
            $photo_new_path = $request->file('photo')->storeAs('package/photo', $package->photo, 'public');
        }
        $package->save();

        Alert::success('Create Success.', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->route('package.index');   
    }
    public function edit($id)
    {
        $data= Package::find(Crypt::decryptString($id));
        return view('package.edit',compact('data'));
    }
    public function update(Request $request)
    {
        $package = Package::find($request->package_id);
        $package->package_number = $request->package_number;
        $package->attendance     = $request->attendance;
        $package->name           = $request->name;
        $package->description    = $request->description;
        $package->price          = $request->price;
        $package->user_id        = Auth::user()->id;
        $package->stable_id      = $request->stable_id;
        $package->session_usage  = $request->session;      
        $package->package_status = $request->status; 
        if ($request->file('photo')) {
            File::delete(public_path('/storage/package/photo/'.$package->photo));
            $package->photo = $request->file('photo')->getClientOriginalName();
            $photo_new_path = $request->file('photo')->storeAs('package/photo', $package->photo, 'public');
        }
        $package->save();
        Alert::success('Update Success.', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->route('package.index');   
    }

    public function delete(Request $request)
    {
       Package::find($request->id)->delete();
        return response()->json();
    }
}
