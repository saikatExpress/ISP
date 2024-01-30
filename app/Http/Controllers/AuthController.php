<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function adminLoginStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => ['required'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->back()->with('message', 'Your credentials does not match!');
    }

    public function customerLoginStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => ['required'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('/customer/dashboard');
        }

        return redirect()->back()->with('message', 'Your credentials does not match!');
    }

    public function sellerLoginStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => ['required'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('/seller/dashboard');
        }

        return redirect()->back()->with('message', 'Your credentials does not match!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
