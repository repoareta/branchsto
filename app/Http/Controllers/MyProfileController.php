<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function info()
    {
        $data = User::where('id', Auth::user()->id)->first();

        return view('profile.account-info', compact('data'));
    }

    public function password()
    {
        $data = User::where('id', Auth::user()->id)->first();

        return view('profile.change-password', compact('data'));
    }

    public function change_password(Request $request)
    {
        $data = User::where('id', Auth::user()->id)->first();
        if(Hash::check($request->old_password, $data->password))
        {
            $validator = \Validator::make($request->all(), [
                            'password' => 'required|confirmed|min:8',
                        ]);
            if($validator->fails()){
                Alert::error('Something wrong.', 'Decline.')->persistent(true)->autoClose(3600);
                return redirect()->back();
            }

            $data->password = Hash::make($request->password);
            $data->update();

            Alert::success('Password Updated', 'Success.')->persistent(true)->autoClose(3600);
            return redirect()->back();
        }

        Alert::error('Something wrong.', 'Decline.')->persistent(true)->autoClose(3600);
        return redirect()->back();
        
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
}
