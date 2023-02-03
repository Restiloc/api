<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Expert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Create expert
     * @param Request $request
     * @return expert
     */
    public function create(Request $request)
    {
        try {
            //Validated
            $validate = Validator::make(
                $request->all(),
                [
                    'lastName' => 'required',
                    'firstName' => 'required',
                    'phoneNumber' => 'required',
                    'username' => 'required|unique:experts,username',
                    'email' => 'required|email|unique:experts,email',
                    'password' => 'required'
                ]
            );

            if ($validate->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validate->errors()
                ], 401);
            }

            Expert::create($request->all());

            return response()->json([
                'status' => true,
                'message' => 'Expert created successfully',
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Login The expert
     * @param Request $request
     * @return expert
     */
    public function login(Request $request)
    {
        try {
            $validate = Validator::make(
                $request->all(),
                [
                    'identifier' => 'required',
                    'password' => 'required'
                ]
            );

            if ($validate->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validate->errors()
                ], 401);
            }

            if (
                !Auth::attempt([
                    'username' => $request->identifier,
                    'password' => $request->password
                ]) &&
                !Auth::attempt([
                    'email' => $request->identifier,
                    'password' => $request->password
                ])
            ) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email or Username and Password does not match with our record.',
                ], 401);
            }

            $expert = Expert::where('email', $request->identifier)->orWhere('username', $request->identifier)->first();

            return response()->json([
                'status' => true,
                'message' => 'Expert logged in successfully',
                'token' => $expert->createToken("apiToken")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
