<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tester extends Controller
{
    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function test(Request $request)
    {

        $user = User::find($request->input('id'));
        return response()->json($user->services,200);
    }
}
