<?php

namespace App\Http\Controllers\Auth\AuthCode;

use App\ActiveCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\CodeValidator;
use App\Http\Requests\LoginWithCodeValidator;
use App\Services\Notifications\Notification;
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
        $user = User::where('phone_number',$phone_number)->first();
        $this->sendSms($user);
        return redirect()->route('verify_login_code');
        


    }
    public function sendSms(User $user)
    {
        $notif = resolve(Notification::class);
        $notif->sendSms($user);
    }
    public function verifyForm()
    {
        return view('AuthWithCode.verify');
    }
    public function username()
    {
        return "phone_number";
    }
    public function codeValidator(CodeValidator $request)
    {
        $user = User::where('phone_number',$request->input('phone_number'))->first();
        $status = ActiveCode::ValidateCode($request->input('code'),$user);
        if( $status)
        {
            Auth::login($user);
            return view('index');           
        }
        return redirect()->back()->withErrors('expired', 'کد منقظی شده است');   
    }
  
}
