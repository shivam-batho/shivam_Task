<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoxPatternController extends Controller
{
    public function index(Request $request){
        return view('box_pattern');
    }
}
