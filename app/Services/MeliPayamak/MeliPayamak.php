<?php

namespace App\Services\MeliPayamak;

use App\User;
use Melipayamak\MelipayamakApi;
class MeliPayamak
{
    private $username;
    private $password;
    private $user;
    public function __construct()
    {
        
        $this->username = config('services.meli_payamak.username');
        $this->password = config('services.meli_payamak.password');
    }
    public function send()
    {
        // $this->user->activeCode()->create([
        //     'code' => $this->code,
        //     'expired_at' => now()->addMinutes(2)
        // ]);
        $api = new MelipayamakApi($this->username,$this->password);
        $sms = $api->sms();
        $to = '09014627125';
        $from = '50004001109008';
        $text = 'تست وب سرویس ملی پیامک';
        $response = $sms->send($to,$from,$text);
        $json = json_decode($response);
        dd($json->Value); //RecId or Error Number 

    }
}