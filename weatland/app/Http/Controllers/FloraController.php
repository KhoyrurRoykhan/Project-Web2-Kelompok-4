<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FloraController extends Controller
{
    public function index(){
        return view('layout/flora');
    }
}
