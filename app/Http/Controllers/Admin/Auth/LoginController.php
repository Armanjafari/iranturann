<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginValidator;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = 'admin/';

    public function showForm()
    {
        return view('Admin.auth.login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(LoginValidator $request)
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }
        $this->incrementLoginAttempts($request);
        $phone_number = $request->input('phone_number');
        //dd($phone_number);
        $user = User::where('phone_number',$phone_number)->firstOrFail();
        if ($user->hasRole('admin'))
        {
            Auth::login($user);
        }
        return 404;

    }
    public function username()
    {
        return 'phone_number';
    }
}
