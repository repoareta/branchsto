<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class ClubController extends Controller
{
    public function index()
    {
        return view('management_club.index');
    }

    public function store(Request $request)
    {
        $regisuser = Http::asForm()->post('http://185.201.9.73/branchsto/public/api/horse',[
            'name'         => $request->horse_name,
            'gender'       => $request->gender,
            'birth'        => $request->birth,
            'type'         => $request->type,
            'descendant'   => $request->descendant,
        ]); 
        if ($regisuser->getStatusCode() == 200) {
            Alert::success('Register Success.', 'Success.')->persistent(true)->autoClose(3600);
            return redirect()->route('horse.index');
        }else{
            Alert::info('Register Failed.', 'Try Again.')->persistent(true)->autoClose(3600);
            return redirect()->route('horse.index');
        }   
    }

    public function menu()
    {
        return view('management_club.index_menu');
    }
}
