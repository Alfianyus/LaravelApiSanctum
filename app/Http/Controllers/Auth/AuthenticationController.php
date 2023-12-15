<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
   public function register(RegisterRequest $request)
   {
        $request->validated();

        $userData = [
            'name' => $request->name,
            'username' => $request->username,
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

        $customer = Customer::whereUsername($request->username)->first();
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
