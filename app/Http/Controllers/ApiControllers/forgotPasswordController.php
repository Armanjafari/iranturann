<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;
use Illuminate\Support\Facades\Password;

class forgotPasswordController extends Controller
{
    //
    public function forgot(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:100|exists:users,email',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::where('email',$validator);
        $link = Password::sendResetLink($user);

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);

    }
}
