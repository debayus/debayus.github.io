<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $models = config('projects', []);
        return view('index', [
            'models' => [
                $models[0],
                $models[1],
                $models[2],
            ]
        ]);
    }

    public function gallery()
    {
        $models = config('projects', []);
        return view('gallery', [
            'models' => $models
        ]);
    }
}
