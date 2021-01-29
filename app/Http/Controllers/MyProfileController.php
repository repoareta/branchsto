<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

// load model
use App\Models\User;
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
        $Query->height = $request->height;
        $Query->weight = $request->weight;
        $Query->address = $request->address;
        if ($request->file('photo')) {
            File::delete(public_path('/storage/myprofile/photo/'.$Query->photo));
            $Query->photo = $request->file('photo')->getClientOriginalName();
            $image = Image::make($request->file('photo'))->resize(100,100);
            $image->save(public_path('/storage/myprofile/photo/'.$Query->photo));
        }

        if(session()->get('list_detail') || session()->get('data_slot')){

            $Query->update();
            $list_detail = session()->get('list_detail')[0];
            $data_slot   = session()->get('data_slot')[0];
            
            if(
                $Query->sex == null ||
                $Query->birth_date == null ||
                $Query->phone == null ||
                $Query->address == null
            ){
                Alert::error('Data Error.', 'Please complete your data.')->persistent(true)->autoClose(3600);
                return redirect()->route('myprofile.index');
            }
            
            Alert::success('Profile Updated', 'Success.')->persistent(true)->autoClose(3600);            
            return view('riding_class.booking-package', compact('list_detail', 'data_slot'));

        }
        
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
}
