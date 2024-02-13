<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class AuthenticationController extends Controller
{
   public function register(RegisterRequest $request)
   {
    $validator = Validator::make($request->all(),[
        'name' => 'alpha|string|max:255',
        'firstname' => 'alpha|string|max:255',
        'email' => 'required|email|unique:customers,email',
        'password' => [
            'required',
            'string',
            'min:8',
            'regex:/[A-Za-z0-9!@#$%^&*(),.?":{}|<>]/',
        ],
    ]);
    if($validator->fails()){
        return response()->json(['errors' => $validator->errors()], 422);
    }

        $userData = [
            'name' => $request->name,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        $customer = Customer::create($userData);
        $token = $customer->createToken('forumapp')->plainTextToken;

        return response([
            'customer' => $customer,
            'token' => $token
        ], 201);
   }

   public function login(LoginRequest $request)
   {
        $request->validated();

        $customer = Customer::whereEmail($request->email)->first();
        if(!$customer || !Hash::check($request->password, $customer->password)){
            return response([
                'message' => 'Invalid credentials'
            ], 422);
        }

        $token = $customer->createToken('forumapp')->plainTextToken;

        return response([
            'customer' => $customer,
            'token' => $token
        ], 200);

   }
}
