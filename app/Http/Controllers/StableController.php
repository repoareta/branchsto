<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// load model
use App\Models\Stable;
use App\Models\Province;
use App\Models\City;
use App\Models\District;
use App\Models\Village;

//load form request (for validation)
use App\Http\Requests\StableStore;
use Illuminate\Support\Facades\File;
use GrahamCampbell\ResultType\Success;

class StableController extends Controller
{
    public function index(){
        $data = Stable::with(['user'])->where('user_id', Auth::user()->id)->first();
        $province = Province::all();
        $city = City::find($data->city_id);
        $district = District::find($data->district_id);
        $village = Village::find($data->village_id);
        return view('management_stable.index',compact('data', 'province','city','district','village'));
    }

    public function menu()
    {
        return view('management_stable.index');
    }

    public function create()
    {
        return view('management_stable.create');
    }

    public function store(StableStore $request, Stable $stable)
    {
        $stable->name               = $request->name;
        $stable->owner              = Auth::user()->name;
        $stable->manager            = '-';
        $stable->contact_person     = $request->contact_person;
        $stable->contact_number     = $request->contact_number;
        $stable->capacity_of_stable = 0;
        $stable->capacity_of_arena  = 0;
        $stable->number_of_coach    = 0;
        $stable->address            = $request->address;
        $stable->province_id        = $request->province_id;
        $stable->city_id            = $request->city_id;
        $stable->district_id        = $request->district_id;
        $stable->village_id         = $request->village_id;
        $stable->user_id            = Auth::user()->id;
        if ($request->file('logo')) {
            $stable->logo = $request->file('logo')->getClientOriginalName();
            $logo_new_path = $request->file('logo')->storeAs('stable/logo', $stable->logo, 'public');
        }
        $stable->save();
        Alert::success('Register Stable Success.', 'Success')->persistent(true)->autoClose(3600);
        return redirect()->back();
    }
    public function update(StableStore $request, Stable $stable)
    {
        $stable = Stable::find($request->stable_id);
        $stable->name               = $request->name;
        $stable->owner              = $request->owner;
        $stable->manager            = $request->manager;
        $stable->contact_person     = $request->contact_person;
        $stable->contact_number     = $request->contact_number;
        $stable->capacity_of_stable = $request->capacity_of_stable;
        $stable->capacity_of_arena  = $request->capacity_of_arena;
        $stable->number_of_coach    = $request->number_of_coach;
        $stable->address            = $request->address;
        $stable->account_name       = $request->account_name;
        $stable->account_number     = $request->account_number;
        $stable->branch             = $request->branch;
        $stable->province_id        = $request->province_id;
        $stable->city_id            = $request->city_id;
        $stable->district_id        = $request->district_id;
        $stable->village_id         = $request->village_id;
        $stable->user_id            = Auth::user()->id;
        if ($request->file('logo')) {
            File::delete(public_path('/storage/stable/logo/'.$stable->photo));
            $stable->logo = $request->file('logo')->getClientOriginalName();
            $logo_new_path = $request->file('logo')->storeAs('stable/logo', $stable->logo, 'public');
        }
        $stable->save();

        Alert::success('Update Stable Success.', 'Success')->persistent(true)->autoClose(3600);
        return redirect()->back();
    }


    public function stable_close(Request $request)
    {
        $data_list  = DB::table('slot_user as a')
        ->where('a.booking_detail_id',$request->id)
        ->leftJoin('slots as b', 'b.id', '=', 'a.slot_id')
        ->select('b.date','b.time_start','b.time_end','a.qr_code_status','a.id')->get();
        return view('stable_close.index',compact('data_list'));
    }

    public function close(Request $request){
        DB::table('slot_user')->where('id', $request->id)
        ->update([
            'qr_code_status' => 'Close',
        ]);
        return response()->json();
    }
}
