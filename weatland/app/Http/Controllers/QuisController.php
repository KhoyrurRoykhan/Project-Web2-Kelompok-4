<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuisController extends Controller
{
    public function index(){
        return view ('layout/quis');
    }
}
