<?php
namespace App\Support\Payment\Gateways;

use App\Support\Payment\Gateways\GatewayInterface;
use Illuminate\Http\Request;
class Saman implements GatewayInterface
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
        $amount = $order->amount + 10000;
        echo "<form id='samanpeyment' action='https://sep.shaparak.ir/payment.aspx' method='post'>
		<input type='hidden' name='Amount' value='{$amount}' />
		<input type='hidden' name='ResNum' value='{$order->code}'>
		<input type='hidden' name='RedirectURL' value='{$this->callback}'/>
		<input type='hidden' name='MID' value='{$this->merchantID}'/>
		</form><script>document.forms['samanpeyment'].submit()</script>";
    }
    public function verify(Request $request)
    {
        if(!$request->has('State') || $request->input('State') != 'OK')
        {
            return $this->transactionFailed();
        }

    }
    private function transactionFailed()
    {
        return [
            'status' => self::TRANSACTION_FAILED
        ];
    }
    public function getName():string
    {
        return "Saman";
    }
}