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

         //assign otp to user
        $code = $this->generate_otp();

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'phone_number' => $request['phone_number'],
            'date_of_birth' => date('y/m/d h:i:s', strtotime($request['d_o_b'])),
            'verification_code' => $code,
        ]);




        // derive token for registeration
        $token = $user->createToken('auth_token')->accessToken;



        // return response
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'errors' => '',
            'user' => ['email'=>$user->email, 'id'=>$user->id],

        ], 200);
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
        $token = $user->createToken('auth_token')->accessToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'errors' => '',
            'user' => ['email'=>$user->email, 'id'=>$user->id],
        ], 200);
    }

    public function generate_otp(){

        //  generate five random codes
        $result = bin2hex(openssl_random_pseudo_bytes(2)).substr(str_shuffle('1234567890'),0,1);
        return $result;
    }

    public function verify_code(){
        $token = Auth::user()->tokens();
        return response()->json([
            'access_token' => $token,
            'message'=> 'verified',
        ]);
    }
}

