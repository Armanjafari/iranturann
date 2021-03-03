<?php
namespace App\Support\Payment\Gateways;

use App\Support\Payment\Gateways\GatewayInterface;
use Illuminate\Http\Request;
class Mellat implements GatewayInterface
{
    private $merchantID;
    private $callback;
    public function __construct()
    {
        $this->merchantID = '123456789';
        $this->callback = route('payment.verify' , $this->getName());
    }
    public function pay($order)
    {
        $this->redirectToBank($order);
    }
    private function redirectToBank($order)
    {
        $localdate = date('Ymd');
        $localTime = date('Gis');
        $amount = $order->amount + 10000;
        $userid = auth()->user()->id;
        echo "<form id='mellatpeyment' action='https://bpm.shaparak.ir/pgwchannel/startpay.mellat' method='post'>
        <input type='hidden' name='‫‪terminalId‬‬' value='5453042' />
        <input type='hidden' name='‫‪userName‬‬' value='iranturan123' />
        <input type='hidden' name='‫‪userPassword‬‬' value='20862902' />
		<input type='hidden' name='‫‪orderId‬‬' value='{$order->code}'>
        <input type='hidden' name='amount' value='{$amount}' />
        <input type='hidden' name='localDate' value='{$localdate}'>
        <input type='hidden' name='localTime' value='{$localTime}'>
		<input type='hidden' name='‫‪additionalData‬‬' value=''/>
        <input type='hidden' name='‫‪callBackUrl‬‬' value='{$this->callback}'/>
        <input type='hidden' name='payerId' value='{$userid}'/>
		</form><script>document.forms['mellatpeyment'].submit()</script>";
        
    }
    public function verify(Request $request)
    {
        
    }
    public function getName():string
    {
        return "saman";
    }
}