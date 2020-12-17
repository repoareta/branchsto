<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\Register;
use App\Http\Requests\ResetPassword;

class RegisterController extends Controller
{
    /*gis
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'login.loginForm';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Register $request)
    {
        $regisuser = Http::post('http://185.201.9.73/branchsto/public/api/register',[
            'email'         => $request->email,
            'password'      => $request->password,
            'name'          => $request->name,
        ]);  
                
        if ($regisuser->getStatusCode() == 200) {
            Auth::attempt($request->only('email', 'password'));
            Alert::success('Register Success.', 'Segera lakukan verifikasi email.')->persistent(true)->autoClose(3600);
            return redirect()->route('verifikasi.index');
        }else{
            Alert::info('Register Failed.', 'Try Again.')->persistent(true)->autoClose(3600);
            return redirect()->route('login.loginForm');
        }    
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
