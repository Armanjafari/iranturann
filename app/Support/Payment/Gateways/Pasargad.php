<?php
namespace App\Support\Payment\Gateways;

use App\Support\Payment\Gateways\GatewayInterface;
use Illuminate\Http\Request;
class Pasargad implements GatewayInterface
{
    public function pay($order)
    {
        dd('Pasargad');
    }
    public function verify(Request $request)
    {
        # code...
    }
    public function getName():string
    {
        return "Pasargad";
    }
}