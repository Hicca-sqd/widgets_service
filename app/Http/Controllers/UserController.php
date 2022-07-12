<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function start(){
        if(Auth::user()->is_admin){
            $services = Service::paginate(5);
            return view('user_subscriptions')
                ->with('user',Auth::user())
                ->with('services', $services);
        }
    }
}
