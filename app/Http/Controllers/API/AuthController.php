<?php

namespace App\Http\Controllers\API;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    //

    public function register(Request $request)
    {
        // validate data

        $validator = $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|confirmed|string|min:6',
            'date_of_birth' => 'required',
        ]);


        if(!$validator){
            return response()->json([
                'errors' => $validator->errors()->all()
            ], 422);
        }


        // create user


        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'phone_number' => $request['phone_number'],
            'date_of_birth' => date('y/m/d h:i:s', strtotime($request['d_o_b'])),
        ]);


        // derive token for registeration
        $token = $user->createToken('auth_token')->plainTextToken;

        // return response
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',

        ]);
    }


    public function login(Request $request)
    {

         // validate data

         $validator = $this->validate($request, [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6',

        ]);


        if(!$validator){
            return response()->json([
                'errors' => $validator->errors()->all()
            ], 422);
        }

        if(!Auth::attempt($request->only('username', 'password'))){
                return response()->json([
                    'error_message' => 'Inavlid Login Credentials',
                    'errors' => '',

                ], 401);
        }

        $user = User::where('username', $request['username'])->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'errors' => '',
        ], 200);
    }
}
