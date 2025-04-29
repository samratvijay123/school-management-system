<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(){
        return view('website.index');

    }

    public function newweb(){
        return view('website.newweb');
    }
}
