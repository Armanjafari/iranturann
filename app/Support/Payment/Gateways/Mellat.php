<?php
namespace App\Support\Payment\Gateways;

use App\Support\Payment\Gateways\GatewayInterface;
use DateTime;
use Illuminate\Http\Request;
use nusoap_client;
use SoapClient;

class Mellat implements GatewayInterface
{
    private $merchantID;
    private $callback;
    protected $serverUrl = 'https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl';
    public function __construct()
    {
        $this->merchantID = '123456789';
        $this->callback = route('payment.verify' , $this->getName());
    }
    public function pay($order , int $amount)
    {
        $this->redirectToBank($order , $amount);
    }
    // $parameters = [
    //     'terminalId' => '5453042',
    //     'userName' => 'iranturan123',
    //     'userPassword' => '20862902',
    //     'orderId' => $order->id,
    //     'amount' => $amount,
    //     'localDate' => date("Ymd"),
    //     'localTime' => date("His"),
    //     'additionalData' => auth()->user()->phone_number,
    //     'callBackUrl' => $this->callback,
    //     'payerId' => '0'
    // ];
    private function redirectToBank($order , $amount)
    {
        $terminalId		= "5453042";					// Terminal ID
        $userName		= "iranturan123";					// Username
        $userPassword	= "65916041";					// Password
        $orderId		= $order->id;						// Order ID
        $amount 		= $amount;						// Price / Rial
        $localDate		= date('Ymd');					// Date
        $localTime		= date('Gis');					// Time
        $additionalData	= auth()->user()->phone_number;
        $callBackUrl	= $this->callback;	// Callback URL
        $payerId		= 0;
         
        //-- تبدیل اطلاعات به آرایه برای ارسال به بانک
        $parameters = array(
            'terminalId' 		=> $terminalId,
            'userName' 			=> $userName,
            'userPassword' 		=> $userPassword,
            'orderId' 			=> $orderId,
            'amount' 			=> $amount,
            'localDate' 		=> $localDate,
            'localTime' 		=> $localTime,
            'additionalData' 	=> $additionalData,
            'callBackUrl' 		=> $callBackUrl,
            'payerId' 			=> $payerId);
         
        $client = new nusoap_client('https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl');
        $namespace='http://interfaces.core.sw.bps.com/';
        $result 	= $client->call('bpPayRequest', $parameters, $namespace);
        //-- بررسی وجود خطا
        if ($client->fault)
        {
            //-- نمایش خطا
            echo "There was a problem connecting to Bank";
            exit;
        } 
        else
        {
            $err = $client->getError();
            if ($err)
            {
                //-- نمایش خطا
                echo "Error : ". $err;
                exit;
            } 
            else
            {
                $res 		= explode (',',$result);
                $ResCode 	= $res[0];
                if ($ResCode == "0")
                {
                    //-- انتقال به درگاه پرداخت
                    echo '<form name="myform" action="https://bpm.shaparak.ir/pgwchannel/startpay.mellat" method="POST">
                            <input type="hidden" id="RefId" name="RefId" value="'. $res[1] .'">
                        </form>
                        <script type="text/javascript">window.onload = formSubmit; function formSubmit() { document.forms[0].submit(); }</script>';
                    exit;
                }
                else
                {
                    //-- نمایش خطا
                    echo "Error : ". $result;
                    exit;
                }
            }
        }
    }
    public function verify(Request $request)
    {
        
    }
    public function getName():string
    {
        return "mellat";
    }
}