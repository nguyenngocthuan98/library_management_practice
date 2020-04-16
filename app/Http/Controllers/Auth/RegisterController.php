<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Registerrequest;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    public function index()
    {
        return view('auth.register');
    }

    /**
     * Create a new user instance after a valid registration.
     * Role: user: role = 0 (default), admin: role = 1
     *
     * @param
     * @return \App\User
     */
    protected function create(RegisterRequest $req)
    {
        return $user = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'birth' => $req->birth,
            'address' => $req->address,
            'gender' => $req->gender,
            'phone' => $req->phone,
            'role' => 0,
        ];
        $user = User::create($user);
        return redirect()->route('home');
    }
}
