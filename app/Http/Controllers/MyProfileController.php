<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

// load model
use App\Models\User;
use App\Models\Stable;
use App\Models\Province;
use App\Models\City;
use App\Models\District;
use App\Models\Village;
class MyProfileController extends Controller
{
    public function index(){
        $data = User::where('id', Auth::user()->id)->first();
        
        return view('profile.myprofile',compact('data'));
    }

    public function getCity(Request $request)
    {
        $city = City::where('province_id',$request->province_id)
                ->pluck('name','id');
        return response()->json($city);
    }

    public function getDistrict(Request $request)
    {
        $district = District::where('city_id',$request->city_id)
                ->pluck('name','id');
        return response()->json($district);
    }

    public function getVillage(Request $request)
    {
        $village = Village::where('district_id',$request->district_id)
                ->pluck('name','id');
        return response()->json($village);
    }

    public function update(Request $request)
    {
        $Query = User::where('id', Auth::user()->id)->first();
        $Query->name = $request->name;
        $Query->sex = $request->sex;
        $Query->birth_date = Carbon::parse($request->birth_date);
        $Query->phone = $request->phone;
        $Query->address = $request->address;

        if($Query){
            $Query->update();
            Alert::success('Profile Updated', 'Success.')->persistent(true)->autoClose(3600);
            return redirect()->back();
        }
        Alert::error('Something wrong.', 'Decline.')->persistent(true)->autoClose(3600);
        return redirect()->back();
    }
}
