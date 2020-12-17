<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


//load form request (for validation)
use App\Http\Requests\Horse;
class HorseController extends Controller
{
    public function index()
    {
        return view('horse.index');
    }
    public function listJson()
    {
        $data_stable= Http::get('http://185.201.9.73/branchsto/public/api/stable-by-user/'.Auth::user()->id)->json();
        $dataa= Http::get('http://185.201.9.73/branchsto/public/api/horse-by-stable/'.$data_stable['data']['id']);
        $data=[];
        foreach($dataa['data'] as $row)
        {
            $data[] = $row;
        }
        return datatables()->of($data)
            ->addColumn('profile', function ($data) {
                return "<img src='assets/media/branchsto/horse.png' width='40px' height='40px' alt=''> ";
            })
            ->addColumn('horse_name', function ($data) {
                return $data['name'];
            })
            ->addColumn('birth_date', function ($data) {
                return $data['birth_date'];
            })
            ->addColumn('age', function ($data) {
                $dateOfBirth = $data['birth_date'];
                return Carbon::parse($dateOfBirth)->age;;
            })
            ->addColumn('sex', function ($data) {
                return $data['sex'];
            })
            ->addColumn('passport_number', function ($data) {
                return $data['passport_number'];
            })
            ->addColumn('horse_owner', function ($data) {
                return $data['owner'];
            })
            ->addColumn('horse_breeds', function ($data) {
                return $data['breeds'];
            })
            ->addColumn('action', function ($data) {
                return 
                "
                    <i class='fas fa-pen edit-horse pointer-link' data-id='".$data['id']."'></i>
                    <i class='fas fa-eye '></i>
                    <i class='fas fa-trash delete-horse pointer-link' data-id='".$data['id']."'></i>
                ";
            })
            ->rawColumns(['profile','action'])
            ->make(true);
    }
    public function create()
    {
        $data= Http::get('http://185.201.9.73/branchsto/public/api/stable-by-user/'.Auth::user()->id);
        return view('horse.create',compact('data'));
    }

    public function store(Horse $request)
    {
        dd($request);
        $status = Http::post('http://185.201.9.73/branchsto/public/api/horse',[
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
            Alert::success('Create Data Success.', 'Success.')->persistent(true)->autoClose(3600);
            return redirect()->route('horse.index');
        }else{
            Alert::info('Create Data Failed.', 'Try Again.')->persistent(true)->autoClose(3600);
            return redirect()->route('horse.index');
        }   
    }

    public function edit($id)
    {
        $data= Http::get('http://185.201.9.73/branchsto/public/api/horse/'.$id);
        return view('horse.edit',compact('data'));
    }
    public function update(Horse $request)
    {
        $status = Http::put('http://185.201.9.73/branchsto/public/api/horse/'.$request->horse_id,[
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
            return redirect()->route('horse.index');
        }else{
            Alert::info('Update Failed.', 'Try Again.')->persistent(true)->autoClose(3600);
            return redirect()->route('horse.index');
        }   
    }

    public function delete(Request $request)
    {
        $data = Http::delete('http://185.201.9.73/branchsto/public/api/horse/'.$request->id);
        return response()->json();
    }
}
