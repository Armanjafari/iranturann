<?php

namespace App\Services\MeliPayamak;

use App\User;
use Melipayamak\MelipayamakApi;
class MeliPayamak
{
    private $username;
    private $password;
    private $user;
    private $text;
    private $method;
    public function __construct(User $user , String $method)
    {
        $this->user = $user;
        $this->method = $method;
        $this->username = config('services.meli_payamak.username');
        $this->password = config('services.meli_payamak.password');
    }
    public function send()
    {   
        $this->validate();
        $api = new MelipayamakApi($this->username,$this->password);
        $sms = $api->sms();
        $to = $this->user->phone_number;
        $from = '50004001109008';
        $response = $sms->send($to,$from,$this->text);
        $json = json_decode($response);
        // dd($json->Value);

    }
    public function createCode()
    {
        $code = mt_rand(10000,99999);
        $this->user->activeCode()->create([
            'code' => $code,
            'expired_at' => now()->addMinutes(2)]);
        
        $this->text =  "کد تایید وبسایت بزرگ ایران توران
" . $code;
    }
    public function validate()
    {
        switch ($this->method) {
            case 'code':
                $this->createCode();
                break;
            
            default:
                # code...
                break;
        }
    }
}