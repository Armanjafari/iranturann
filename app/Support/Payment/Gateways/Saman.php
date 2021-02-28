<?php
namespace App\Support\Payment\Gateways;

use App\Support\Payment\Gateways\GatewayInterface;
use Illuminate\Http\Request;
class Saman implements GatewayInterface
{
    public function pay($order)
    {
        dd('saman pay');
    }
    public function verify(Request $request)
    {
        # code...
    }
    public function getName():string
    {
        return "Saman";
    }
}