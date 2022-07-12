<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function start(){
        if(Auth::user()->is_admin){
            return view('my_files')->with('user',Auth::user());
        }
    }
}
