<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use JWTFactory;
use JWTAuth;
use Validator;
use Response;


class APIRegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email',
            'username'=> 'required',
            'password'=> 'required',
            'type'=> 'required'

        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'password' => bcrypt($request->get('password')),
            'type' => $request->get('type'),
        ]);
        $user = User::first();
        $token = JWTAuth::fromUser($user);
        
        return Response::json(compact('token'));
    }}
