<?php

namespace App\Http\Controllers\Auth\AuthCode;

use App\ActiveCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\CodeValidator;
use App\Http\Requests\LoginWithCodeValidator;
use App\Services\MeliPayamak\MeliPayamak;
use App\Services\Notifications\Notification;
use App\User;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginWithCodeController extends Controller
{
    use ThrottlesLogins;
    public $code;
    public function __construct()
    {
        $this->middleware('guest');
    }
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
        session()->put('phone_number', $phone_number);
        $user = User::where('phone_number',$phone_number)->first();
        if (!$user) {
            return view('AuthWithCode.register');
        }
        $this->sendSms($user);
        return redirect()->route('verify_login_code');
        


    }
    public function register(Request $request)
    {
        dd($request->all());
    }
    public function sendSms(User $user)
    {
        $notif = new MeliPayamak($user , 'code');
        $notif->send($user , 'code');
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
        $user = User::where('phone_number',session()->get('phone_number'))->first();
        session()->forget('phone_number');
        $status = ActiveCode::ValidateCode($request->input('code'),$user);
        //dd($status);
        if( $status)
        {
            Auth::login($user);
            return redirect()->route('index');
        }
        return redirect()->back()->withErrors('errors', 'کد منقظی شده است');   
    }
  
}
