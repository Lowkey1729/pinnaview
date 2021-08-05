<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{

    public function  auth_user_details(){
        $user = Auth::user();

        return response()->json([

            'profile_details' => $user,

        ], 200);
    }
}
