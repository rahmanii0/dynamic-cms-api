<?php

namespace Modules\Admin\Http\Controllers;

use Modules\Admin\Models\Admin;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Http\Requests\AdminLoginRequest;
use Modules\Admin\Http\Requests\AdminRequest;
use Tymon\JWTAuth\Exceptions\JWTException;

class AdminAuthController extends Controller

{
    public function registerAdmin(AdminRequest $request)
    {
              $admin = Admin::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $token = Auth::guard('admin')->login($admin);

        return response()->json([
            'message' => 'Admin registerd successfully',
            'admin' => $admin,
            'token' => $token
        ], 201);
    }

    public function loginAdmin(AdminLoginRequest $request)
    {
        $credentials = $request->only('user_name', 'password',);

        if (!$token = Auth::guard('admin')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json([
            'message' => 'Admin logedin successfully',
            'token' => $token], 200);
    }




    public function logout()
    {
        try {
            Auth::guard()->logout();
            return response()->json(['message' => 'Admin Successfully logged out']);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Failed to logout'], 500);
        }
    }


}