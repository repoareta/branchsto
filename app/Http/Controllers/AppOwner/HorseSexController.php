<?php

namespace App\Http\Controllers\AppOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HorseSexController extends Controller
{
    public function index()
    {
        return view('app-owner.horse-sex');
    }
}
