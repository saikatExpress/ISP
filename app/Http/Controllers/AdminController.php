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

class AdminController extends Controller
{
    public function landingPage()
    {
        return view('auth.preLogin');
    }

    public function adminLogin()
    {
        return view('auth.admin_login');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function sellerLogin()
    {
        return view('auth.seller_login');
    }

    public function customerLogin()
    {
        return view('auth.customer_login');
    }
}
