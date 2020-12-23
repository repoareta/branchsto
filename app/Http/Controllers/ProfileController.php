<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

// load model
use App\Models\Stable;
use App\Models\Province;
use App\Models\City;
use App\Models\District;
use App\Models\Village;
class ProfileController extends Controller
{
    public function index(){
        $data = Stable::with(['user'])->where('user_id', Auth::user()->id)->first();
        $province = Province::all();
        return view('profile.index',compact('data', 'province'));
    }

    public function getCity(Request $request)
    {
        $city = City::where('province_id',$request->province_id)
                ->pluck('name','id');
        return response()->json($city);
    }

    public function getDistrtict(Request $request)
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
