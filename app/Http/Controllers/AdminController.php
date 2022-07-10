<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $req){
        return view('admin.index');
    }

    public function galleries(Request $req){
        return view('admin.galleries');
    }

    public function tags(Request $req){
        return view('admin.tags');
    }
}
