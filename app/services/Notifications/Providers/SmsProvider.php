<?php

namespace App\services\Notifications\Providers;

use App\ActiveCode;
use App\services\Notifications\Providers\Contracts\Provider;
use App\User;
use \GuzzleHttp\Client;
class SmsProvider implements Provider{

    private $phone_number;
    private $code;
    public function __construct($phone_number)
    {
        $this->phone_number = $phone_number;
        $this->code = mt_rand(1000,9999);
    }
    public function send()
    {  
        User::where('phone_number',$this->phone_number)->first()->activeCode()->create([
            'code' => $this->code,
            'expired_at' => now()->addMinutes(5)]);
        //APIKEY 1MBWwEqHPAHXbO_3P0AGfnhsWRLOuJslxiCq8K32lN0=
        $client = new Client(['headers' => ['Authorization' =>'AccessKey 1MBWwEqHPAHXbO_3P0AGfnhsWRLOuJslxiCq8K32lN0='],
        'json' => [
            'pattern_code' => 'avolm8i3rb',
            'originator' => '+983000505',
            'recipient' => $this->phone_number,
            'values' => [
                'OTP' => (string)$this->code,
            ]],
        'base_uri' => 'http://rest.ippanel.com/v1/messages/patterns/send']);
       // dd($client);
        $response = $client->request('POST');

    }
}
?>
