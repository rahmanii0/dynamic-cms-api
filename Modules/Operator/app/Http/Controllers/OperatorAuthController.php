<?php

namespace Modules\Operator\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Operator\Http\Requests\LoginOperatorRequest;
use Tymon\JWTAuth\Facades\JWTAuth;



class OperatorAuthController extends Controller
{


    public function login(LoginOperatorRequest $request)
    {
        $credentials = $request->only('user_name', 'password');

        if (!$token = Auth::guard('operator')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json([
            'message' => 'operator logedin successfully',
            'token' => $token
        ], 200);
    }

  
    public function logout()
    {
        try {
            JWTAuth::invalidate(JWTAuth::getToken()); 
            return response()->json(['message' => 'Operator Successfully logged out']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to logout'], 500);
        }
    }


}