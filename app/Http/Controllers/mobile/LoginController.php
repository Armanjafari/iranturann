<?php

namespace App\Http\Controllers\mobile;

use App\ActiveCode;
use App\City;
use App\Http\Controllers\Controller;
use App\Http\Requests\CodeValidator;
use App\Http\Requests\LoginWithCodeValidator;
use App\Market;
use App\Services\MeliPayamak\MeliPayamak;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers {
        logout as performLogout;
    }
    use ThrottlesLogins;
    protected function loggedOut(Request $request)
    {
        //
    }
    public $code;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm(Market $market)
    {
        return view('mobile.AuthWithCode.login',compact('market'));
    }
    public function login(LoginWithCodeValidator $request , Market $market)
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }
        $this->incrementLoginAttempts($request);
        $phone_number = $request->input('phone_number') ?? session()->get('phone_number');
        session()->put('phone_number', $phone_number);
        $user = User::where('phone_number',$phone_number)->first();
        if (!$user) {
            $cities = City::all();
            return view('mobile.AuthWithCode.register',compact('cities' , 'market'));
        }

        $this->sendSms($user , 'code');//mobile.verify
        return redirect()->route('mobile.verify_login_code',$market->id);
        


    }
    public function sendSms($user, $method)
    {
        $notif = new MeliPayamak($user , $method);
        $notif->send();
    }
    public function verifyForm(Market $market)
    {
        // dd('verify');
        return view('mobile.AuthWithCode.verify',compact('market'));
    }
    public function username()
    {
        return "phone_number";
    }
    public function codeValidator(CodeValidator $request , Market $market)
    {
        $user = User::where('phone_number',session()->get('phone_number'))->first();
        session()->forget('phone_number');
        $status = ActiveCode::ValidateCode($request->input('code'),$user);
        //dd($status);
        if( $status)
        {
            Auth::login($user);
            return redirect()->route('mobile.show.market',$market->id);
        }
        return redirect()->back()->withErrors('errors', 'کد منقظی شده است');   
    }
    public function register(Request $request ,Market $market)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'address' => 'required',
        ]);
        $user = User::create([
            'name' => $request->input('name'),
            'phone_number' => session()->get('phone_number'),
            'parent_id' => $request->input('parent'),
        ]);
        $user->shipings()->create([
            'city_id' => $request->input('city'),
            'postal_code' => $request->input('postal_code'),
            'address' => $request->input('address'),
        ]);
        $this->sendSms($user , 'code');
        return redirect()->route('mobile.verify_login_code',$market->id)->withSuccess(' ثبت نام با موفقیت انجام شد ');
        
    }

    public function logout(Request $request,Market $market)

    {
    
        $this->performLogout($request);    
       return redirect()->route('mobile.show.market',$market->id);
    
    }
}
