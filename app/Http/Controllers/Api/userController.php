<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; 

class userController extends Controller
{
    public function createUser(Request $request)
    {
        try {
            // Validate user input
            $validateUser = Validator::make($request->all(), [
                "username" => "required",
                "email" => "required|email|unique:users,email",
                "password" => "required",
            ]);

            if ($validateUser->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "Validation error",
                    "errors" => $validateUser->errors()
                ], 401);
            }

            // Create new user
            $user = User::create([
                "username" => $request->username,  // Corrected 'name' to 'username'
                "email" => $request->email,
                "password" => Hash::make($request->password),
            ]);

            // Generate token for the new user
            return response()->json([
                "status" => true,
                "message" => "User Created Successfully",
                "token" => $user->createToken('Personal Access Token')->plainTextToken,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage(),
            ], 500);
        }
    }

    public function loginUser(Request $request)
    {
        try {
            // Validate the user input
            $validateUser = validator($request->all(), [
                "email" => "required|email",
                "password" => "required",
            ]);

            if ($validateUser->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "Validation error",
                    "errors" => $validateUser->errors()
                ], 401);
            }

            // Attempt to log in the user
            if (!Auth::attempt($request->only(['email', 'password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password do not match our records'
                ], 401);
            }

            // Retrieve the authenticated user
            $user = Auth::user();

            // Create a token for the authenticated user
            return response()->json([
                'status' => true,
                'message' => 'User logged in successfully',
                'username'=> $user->username,
                'email'=> $user->email,
                'token' => $user->createToken('Personal Access Token')->plainTextToken
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'errors' => $e->getMessage()
            ], 500);
        }
    }
}
