<?php

namespace App\Http\Controllers\AppOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageApprovalController extends Controller
{
    public function index()
    {
        return view('app-owner.package-approval');
    }
}
