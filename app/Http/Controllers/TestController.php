<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        $test = \App\Models\TestModel::all();
         return view('hello')->with('test',$test);
    }
}
