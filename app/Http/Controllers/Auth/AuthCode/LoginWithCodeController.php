<?php

namespace App\Http\Controllers\Auth\AuthCode;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginWithCodeValidator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;

class LoginWithCodeController extends Controller
{
    use ThrottlesLogins;
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

    }
}
