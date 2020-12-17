<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;



//load form request (for validation)
use App\Http\Requests\Stable;
use GrahamCampbell\ResultType\Success;

class StableController extends Controller
{
    public function index(){
        $data= Http::get('http://185.201.9.73/branchsto/public/api/stable-by-user/'.Auth::user()->id)->json();
        return view('management_stable.index',compact('data'));
    }

    public function menu()
    {
        return view('management_stable.index');
    }

    public function create()
    {
        return view('management_stable.create');
    }
    public function store(Stable $request)
    {
        $register = Http::asForm()->post('http://185.201.9.73/branchsto/public/api/stable',[
            'name'               => $request->name,
            'owner'              => $request->owner,
            'manager'            => $request->manager,
            'contact_person'     => $request->contact_person,
            'contact_number'     => $request->contact_number,
            'capacity_of_stable' => $request->capacity_of_stable,
            'capacity_of_arena'  => $request->capacity_of_arena,
            'number_of_coach'    => $request->number_of_coach,
            'address'            => $request->address,
            'user_id'            => $request->user_id,
        ]); 
        if ($register->getStatusCode() == 200) {
            Alert::success('Register Stable Success.', 'Success')->persistent(true)->autoClose(3600);
            return redirect()->route('profile.index');
        }else{
            Alert::info('Register Stable Failed.', 'Try Again')->persistent(true)->autoClose(3600);
            return redirect()->route('profile.index');
        }
    }
    public function update(Stable $request)
    {
        $register = Http::put('http://185.201.9.73/branchsto/public/api/stable/'.$request->stable_id,[
            'name'               => $request->name,
            'owner'              => $request->owner,
            'manager'            => $request->manager,
            'contact_person'     => $request->contact_person,
            'contact_number'     => $request->contact_number,
            'capacity_of_stable' => $request->capacity_of_stable,
            'capacity_of_arena'  => $request->capacity_of_arena,
            'number_of_coach'    => $request->number_of_coach,
            'address'            => $request->address,
            'user_id'            => $request->user_id,
        ]); 
        if ($register->getStatusCode() == 200) {
            Alert::success('Update Stable Success.', 'Success')->persistent(true)->autoClose(3600);
            return redirect()->route('stable.index');
        }else{
            Alert::info('Update Stable Failed.', 'Try Again')->persistent(true)->autoClose(3600);
            return redirect()->route('stable.index');
        }
    }
}
