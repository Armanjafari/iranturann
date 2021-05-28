<?php

namespace App\Services\Notifications\Providers;

use App\Services\Notifications\Providers\Contracts\Provider;
use App\User;
use \GuzzleHttp\Client;
class SmsProvider implements Provider{

    private $user;
    private $code;
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->code = mt_rand(1000,9999);
    }
    public function send()
    {  
        $this->user->activeCode()->create([
            'code' => $this->code,
            'expired_at' => now()->addMinutes(2)]);
        $client = new Client(['headers' => ['Authorization' =>'AccessKey 1MBWwEqHPAHXbO_3P0AGfnhsWRLOuJslxiCq8K32lN0='],
        'json' => [
            'pattern_code' => 'avolm8i3rb',
            'originator' => '+983000505',
            'recipient' => $this->user->phone_number,
            'values' => [
                'OTP' => (string)$this->code,
            ]],
        'base_uri' => 'http://rest.ippanel.com/v1/messages/patterns/send']);
       // dd($client);
        $response = $client->request('POST');

    }
}
?>
