<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


// load model
use App\Models\Coach;
use App\Models\Stable;

//load form request (for validation)
use App\Http\Requests\CoachStore;

class CoachController extends Controller
{
    public function index()
    {
        return view('coach.index');
    }
    public function listJson()
    {
        $data = Coach::with(['stable'])->where('user_id', Auth::user()->id);
        return datatables()->of($data)
            ->addColumn('profile', function ($data) {
                return "<img src='assets/media/branchsto/user.svg' width='40px' height='40px' alt=''>";
            })
            ->addColumn('coach_name', function ($data) {
                return $data->name;
            })
            ->addColumn('birth_date', function ($data) {
                return $data->birth_date;
            })
            ->addColumn('age', function ($data) {
                $dateOfBirth = $data->birth_date;
                return Carbon::parse($dateOfBirth)->age;
            })
            ->addColumn('sex', function ($data) {
                return $data->sex;
            })
            ->addColumn('experience', function ($data) {
                return $data->experience;
            })
            ->addColumn('certified', function ($data) {
                return $data->certified;
            })
            ->addColumn('action', function ($data) {
                return 
                "
                    <i class='fas fa-pen edit-coach pointer-link' data-id='".$data->id."'></i>
                    <i class='fas fa-eye '></i>
                    <i class='fas fa-trash delete-coach pointer-link' data-id='".$data->id."'></i>
                ";
            })
            ->rawColumns(['profile','action'])
            ->make(true);
    }
    public function create()
    {
        $data_stable = Stable::with(['user','coach'])->where('user_id', Auth::user()->id)->first();
        if($data_stable->capacity_of_stable > 0 and  $data_stable->number_of_coach > 0 and $data_stable->capacity_of_arena > 0){
            if($data_stable->coach->where('stable_id', $data_stable->id)->where('user_id', $data_stable->user_id)->count() < $data_stable->number_of_coach){
                $data = 1;
            }else{
                $data = 0;
            };
        }else{
            $data = 0;
        }        return view('coach.create',compact('data','data_stable'));
    }

    public function store(CoachStore $request, Coach $coach)
    {
        $coach->name           = $request->name;
        $coach->birth_date     = $request->birth_date;
        $coach->sex            = $request->sex;
        $coach->contact_number = $request->contact_number;
        $coach->experience     = $request->experience;
        $coach->certified      = $request->certified;
        $coach->stable_id      = $request->stable_id;
        $coach->user_id        = Auth::user()->id;

        if ($request->file('photo')) {
            $coach->photo = $request->file('photo')->getClientOriginalName();
            $photo_new_path = $request->file('photo')->storeAs('coach/photo', $coach->photo, 'public');
        }
        $coach->save();

        Alert::success('Create Data Success.', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->route('coach.index');  
    }
    public function edit($id)
    {
        $data = Coach::find($id)->first();
        return view('coach.edit',compact('data'));
    }
    public function update(CoachStore $request, Coach $coach)
    {
        $coach = Coach::find($request->coach_id);
        $coach->name           = $request->name;
        $coach->birth_date     = $request->birth_date;
        $coach->sex            = $request->sex;
        $coach->contact_number = $request->contact_number;
        $coach->experience     = $request->experience;
        $coach->certified      = $request->certified;
        $coach->stable_id      = $request->stable_id;
        $coach->user_id        = Auth::user()->id;

        if ($request->file('photo')) {
            $coach->photo = $request->file('photo')->getClientOriginalName();
            $photo_new_path = $request->file('photo')->storeAs('coach/photo', $coach->photo, 'public');
        }
        $coach->save();

        Alert::success('Update Data Success.', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->route('coach.index'); 
    }
    public function delete(Request $request)
    {
        Coach::find($request->id)->delete();
        return response()->json();
    }

           
}
