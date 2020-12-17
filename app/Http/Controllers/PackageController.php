<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


//load form request (for validation)
use App\Http\Requests\Package;
class PackageController extends Controller
{
    public function index()
    {
        return view('package.index');
    }
    public function listJson()
    {
        $data_stable = Http::get('http://185.201.9.73/branchsto/public/api/stable-by-user/'.Auth::user()->id)->json();
        $dataa= Http::get('http://185.201.9.73/branchsto/public/api/package-by-stable/'.$data_stable['data']['id']);
        $data=[];
        foreach($dataa['data'] as $row)
        {
            $data[] = $row;
        }
        return datatables()->of($data)
            ->addColumn('profile', function ($data) {
                return "<img src='assets/media/branchsto/horse.png' width='40px' height='40px' alt=''>";
            })
            ->addColumn('name_package', function ($data) {
                return $data['name'];
            })
            ->addColumn('package_number', function ($data) {
                return $data['package_number'];
            })
            ->addColumn('description', function ($data) {
                return $data['description'];
            })
            ->addColumn('price', function ($data) {
                return $data['price'];
            })
            ->addColumn('action', function ($data) {
                return 
                "
                    <i class='fas fa-pen edit-package pointer-link' data-id='".$data['id']."'></i>
                    <i class='fas fa-eye '></i>
                    <i class='fas fa-trash delete-package pointer-link' data-id='".$data['id']."'></i>
                ";
            })
            ->rawColumns(['profile','action'])
            ->make(true);
    }
    public function create()
    {
        $data= Http::get('http://185.201.9.73/branchsto/public/api/stable-by-user/'.Auth::user()->id);
        return view('package.create',compact('data'));
    }
    public function store(Package $request)
    {
        $status = Http::post('http://185.201.9.73/branchsto/public/api/package',[
            'package_number' => $request->package_number,
            'name'           => $request->name,
            'description'    => $request->description,
            'price'          => $request->price,
            'user_id'        => Auth::user()->id,
            'stable_id'      =>  $request->stable_id,
        ]); 
        $package_id = $status['data']['id'];
        if (session('data_list')) {
            $list_details = session('data_list');
            foreach($list_details as $row)
            {
                $status = Http::post('http://185.201.9.73/branchsto/public/api/slot',[
                    'user_id'       => $row['user_id'],
                    'package_id'    => $package_id,
                    'date_start'    => $row['date_start'],
                    'date_end'      => $row['date_end'],
                    'capacity'      => $row['capacity'],
                ]);
            }
            session()->forget('data_list');
        }
        if ($status->getStatusCode() == 200) {
            Alert::success('Create Data Success.', 'Success.')->persistent(true)->autoClose(3600);
            return redirect()->route('package.index');
        }else{
            Alert::info('Create Data Failed.', 'Try Again.')->persistent(true)->autoClose(3600);
            return redirect()->route('package.index');
        }   
    }
    public function edit($id)
    {
        $data= Http::get('http://185.201.9.73/branchsto/public/api/package/'.$id);
        return view('package.edit',compact('data'));
    }
    public function update(Package $request)
    {
        $status = Http::put('http://185.201.9.73/branchsto/public/api/package/'.$request->package_id,[
            'name'            => $request->name,
            'owner'           => $request->owner,
            'birth_date'      => $request->birth_date,
            'sex'             => $request->sex,
            'passport_number' => $request->passport_number,
            'breeds'          => $request->breeds,
            'pedigree'        => $request->pedigree,
            'stable_id'       => $request->stable_id,
            'user_id'         => Auth::user()->id,
        ]); 
        if ($status->getStatusCode() == 200) {
            Alert::success('Update Success.', 'Success.')->persistent(true)->autoClose(3600);
            return redirect()->route('package.index');
        }else{
            Alert::info('Update Failed.', 'Try Again.')->persistent(true)->autoClose(3600);
            return redirect()->route('package.index');
        }   
    }

    public function delete(Request $request)
    {
        $data = Http::delete('http://185.201.9.73/branchsto/public/api/package/'.$request->id);
        return response()->json();
    }
}
