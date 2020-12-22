<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

// load model
use App\Models\Stable;
class ProfileController extends Controller
{
    public function index(){
        $data = Stable::with(['user'])->where('user_id', Auth::user()->id)->first();
        return view('profile.index',compact('data'));
    }
}
