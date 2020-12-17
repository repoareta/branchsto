<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



//load form request (for validation)
use App\Http\Requests\Coach;

class CoachController extends Controller
{
    public function index()
    {
        return view('coach.index');
    }
    public function listJson()
    {
        $data_stable= Http::get('http://185.201.9.73/branchsto/public/api/stable-by-user/'.Auth::user()->id)->json();
        $dataa= Http::get('http://185.201.9.73/branchsto/public/api/coach-by-stable/'.$data_stable['data']['id']);
        $data=[];
        foreach($dataa['data'] as $row)
        {
            $data[] = $row;
        }
        return datatables()->of($data)
            ->addColumn('profile', function ($data) {
                return "<img src='assets/media/branchsto/user.svg' width='40px' height='40px' alt=''>";
            })
            ->addColumn('coach_name', function ($data) {
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
            ->addColumn('experience', function ($data) {
                return $data['experience'];
            })
            ->addColumn('certified', function ($data) {
                return $data['certified'];
            })
            ->addColumn('action', function ($data) {
                return 
                "
                    <i class='fas fa-pen edit-coach pointer-link' data-id='".$data['id']."'></i>
                    <i class='fas fa-eye '></i>
                    <i class='fas fa-trash delete-coach pointer-link' data-id='".$data['id']."'></i>
                ";
            })
            ->rawColumns(['profile','action'])
            ->make(true);
    }
    public function create()
    {
        $data= Http::get('http://185.201.9.73/branchsto/public/api/stable-by-user/'.Auth::user()->id);
        return view('coach.create',compact('data'));
    }

    public function store(Coach $request)
    {
        $status = Http::post('http://185.201.9.73/branchsto/public/api/coach',[
            'name'           => $request->name,
            'birth_date'     => $request->birth_date,
            'sex'            => $request->sex,
            'contact_number' => $request->contact_number,
            'experience'     => $request->experience,
            'certified'      => $request->certified,
            'stable_id'      => $request->stable_id,
            'user_id'        => Auth::user()->id,
        ]); 
        if ($status->getStatusCode() == 200) {
            Alert::success('Create Data Success.', 'Success.')->persistent(true)->autoClose(3600);
            return redirect()->route('coach.index');
        }else{
            Alert::info('Create Data Failed.', 'Try Again.')->persistent(true)->autoClose(3600);
            return redirect()->route('coach.index');
        }   
    }
    public function edit($id)
    {
        $data= Http::get('http://185.201.9.73/branchsto/public/api/coach/'.$id);
        return view('coach.edit',compact('data'));
    }
    public function update(Coach $request)
    {
        $status = Http::put('http://185.201.9.73/branchsto/public/api/coach/'.$request->coach_id,[
            'name'           => $request->name,
            'birth_date'     => $request->birth_date,
            'sex'            => $request->sex,
            'contact_number' => $request->contact_number,
            'experience'     => $request->experience,
            'certified'      => $request->certified,
            'stable_id'      => $request->stable_id,
            'user_id'        => Auth::user()->id,
        ]); 
        if ($status->getStatusCode() == 200) {
            Alert::success('Update Data Success.', 'Success.')->persistent(true)->autoClose(3600);
            return redirect()->route('coach.index');
        }else{
            Alert::info('Update Data Failed.', 'Try Again.')->persistent(true)->autoClose(3600);
            return redirect()->route('coach.index');
        }   
    }
    public function delete(Request $request)
    {
        $data = Http::delete('http://185.201.9.73/branchsto/public/api/coach/'.$request->id);
        return response()->json();
    }

           
}
