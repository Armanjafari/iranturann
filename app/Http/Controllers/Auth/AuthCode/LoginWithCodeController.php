<?php

namespace App\Http\Controllers\Auth\AuthCode;

use App\ActiveCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginWithCodeValidator;
use App\services\Notifications\Notification;
use App\User;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginWithCodeController extends Controller
{
    use ThrottlesLogins;
    public $code;
    public function showLoginForm()
    {
        return view('AuthWithCode.login');
    }
    public function login(LoginWithCodeValidator $request)
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }
        $this->incrementLoginAttempts($request);
        $phone_number = $request->input('phone_number');
        //dd($phone_number);
        $this->sendSms($phone_number);
        return redirect()->route('verify_login_code');
        


    }
    public function sendSms($phone_number)
    {
        $notif = resolve(Notification::class);
        $notif->sendSms($phone_number);
    }
    public function verifyForm()
    {
        return view('AuthWithCode.verify');
    }
    public function username()
    {
        return "phone_number";
    }
    public function codeValidator(LoginWithCodeValidator $request)
    {
        $user = User::where('phone_number',$request->input('phone_number'))->first();
        $status = ActiveCode::ValidateCode($request->input('code'),$user);
        if( ActiveCode::ValidateCode($request->input('code'),$user))
        {
            Auth::login($user);
            return view('index');           
        }
    }
  
}
