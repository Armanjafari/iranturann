<?php
namespace App\Support\Payment\Gateways;

use App\Support\Payment\Gateways\GatewayInterface;
use Illuminate\Http\Request;
class Pasargad implements GatewayInterface
{
    private $merchantID;
    private $callback;
    public function __construct()
    {
        $this->merchantID = '123456789';
        $this->callback = route('payment.verify' , $this->getName());
    }
    public function pay($order , int $amount)
    {
        $this->redirectToBank($order , $amount);
    }
    private function redirectToBank($order ,int $amount)
    {
        $invoicedate = time();
        $userid = auth()->user()->id;
        $data = "#" . $this->merchantID . "#" . 'xKc80O23871hvke72xxF' . "#" . $order->code . "#" . $invoicedate . "#" . $amount . "#" . $this->callback . "#" . '1004' . "#" . $invoicedate . "#";
        $data = sha1($data, true);
        $result = base64_encode($data);
        echo "<form id='mellatpeyment' action='https://pep.shaparak.ir/gateway.aspx' method='post'>
        <input type='hidden' name='MerchantCode' value='{$this->merchantID}' />
        <input type='hidden' name='TerminalCode' value='{$order->id}' />
		<input type='hidden' name='InvoiceNumber' value='{$order->code}'>
        <input type='hidden' name='InvoiceDate' value='{$invoicedate}'>
        <input type='hidden' name='Amount' value='{$amount}' />
        <input type='hidden' name='RedirectAddress' value='{$this->callback}'/>
        <input type='hidden' name='Action' value='1004'/>
        <input type='hidden' name='TimeStamp' value='{$invoicedate}'/>
        <input type='hidden' name='SIGN' value='{$result}'/>
		</form><script>document.forms['mellatpeyment'].submit()</script>";
        
    }
    public function verify(Request $request)
    {
        # code...
    }
    public function getName():string
    {
        return "pasargad";
    }
}