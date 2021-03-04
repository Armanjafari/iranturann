<?php

namespace App\Http\Controllers\ApiControllers;

use App\ActiveCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\CodeValidator;
use App\Services\Notifications\Notification;
use App\Http\Requests\LoginWithCodeValidator;
use App\User;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginWithCodeController extends Controller
{
    use ThrottlesLogins;
    public $code;
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function login(LoginWithCodeValidator $request)
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }
        $this->incrementLoginAttempts($request);
        $phone_number = $request->input('phone_number');
        //dd($phone_number);
        $user = User::where('phone_number',$phone_number)->first();
        $this->sendSms($user);
        return response()->json(['success' => ' با موفیت ارسال شد ' ] , 200);
        


    }
    public function sendSms(User $user)
    {
        $notif = resolve(Notification::class);
        $notif->sendSms($user);
    }
    public function username()
    {
        return "phone_number";
    }
    public function codeValidator(CodeValidator $request)
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }
        $user = User::where('phone_number',$request->input('phone_number'))->first();
        $status = ActiveCode::ValidateCode($request->input('code'),$user);
        //dd($status);
        if( $status)
        {
            $token = JWTAuth::fromUser($user);
            return response()->json([
            'success' => ' لاگین با موفقیت انجام شد ',
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60 ,
            'user' => $user->load('roles')],200);          
        }
        return response()->json(['errors' => 'کد منقظی شده است' ] ,401);   
    }
}
