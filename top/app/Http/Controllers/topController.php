<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class topController extends Controller
{
    public function index($nama,$npm){
        return view('coba',compact('nama','npm'));

    }
}
