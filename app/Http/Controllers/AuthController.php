<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register','reset']]);
    }

    public function login()
    {
        $credentials = request(['phone_number', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => ' داری اشتباه میزنی '], 401);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        return response()->json(auth('api')->user());
    }


    public function logout()
    {
        
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }


    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth('api')->user(),
            'roles' => auth('api')->user()->with('roles'),
        ],200);
    }
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'phone_number' => 'required|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]); // TODO setup register with code and password

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user,
            'roles' => $user->with('roles'),
        ], 201);
    }
    public function reset()
    {
        $phone_number = request()->validate(['phone_number' => 'required']);
        $user = User::where('phone_number',request('phone_number'));
        Password::sendResetLink($user);
        dd("s");
        return response()->json(["message" => 'sended to your phone']);
    
    }
}
