<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login(Request $req){
        return view('account.login');
    }

    public function register(Request $req){
        return view('account.register');
    }

    public function forgotPassword(Request $req){
        return view('account.forgotPassword');
    }

    public function manage(Request $req){
        return view('account.manage');
    }
}
