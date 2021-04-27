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
    public function __construct(User $user , String $text)
    {
        $this->user = $user;
        $this->text = $text;
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
        $to = $this->user->phone_number;
        $from = '50004001109008';
        $response = $sms->send($to,$from,$this->text);
        $json = json_decode($response);
        dd($json->Value);

    }
}