<?php
namespace App\Support\Payment\Gateways;

use App\Order;
use App\Support\Payment\Gateways\GatewayInterface;
use Illuminate\Http\Request;
use nusoap_client;

class Mellat implements GatewayInterface
{
    private $merchantID;
    private $callback;
    protected $serverUrl = 'https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl';
    public function __construct()
    {
        dd($this);
        $this->merchantID = mt_rand(10000,99999);
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
        $amount 		= $amount * 10;						// Price / Rial
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
            'amount' 			=> $amount * 10,
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
        if ($_POST['ResCode'] == '0') {
            //--پرداخت در بانک باموفقیت بوده
            $client = new nusoap_client('https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl');
            $namespace='http://interfaces.core.sw.bps.com/';
         
            $terminalId				= "5453042";					// Terminal ID
            $userName				= "iranturan123";					// Username
            $userPassword			= "65916041";					// Password
            $orderId 				= $request->input('SaleOrderId');		// Order ID
            
            $verifySaleOrderId 		= $request->input('SaleOrderId');
            $verifySaleReferenceId 	= $request->input('SaleReferenceId');
                    
            $parameters = array(
                'terminalId' => $terminalId,
                'userName' => $userName,
                'userPassword' => $userPassword,
                'orderId' => $orderId,
                'saleOrderId' => $verifySaleOrderId,
                'saleReferenceId' => $verifySaleReferenceId);
            // Call the SOAP method
            $result = $client->call('bpVerifyRequest', $parameters, $namespace);
            if($result == '0') {
                //-- وریفای به درستی انجام شد٬ درخواست واریز وجه
                // Call the SOAP method
                $result = $client->call('bpSettleRequest', $parameters, $namespace);
                if($result == '0') {
                    //-- تمام مراحل پرداخت به درستی انجام شد.
                    //-- آماده کردن خروجی
                    return $this->transactionSuccess($order , $request->input('ResNum'));
                } else {
                    //-- در درخواست واریز وجه مشکل به وجود آمد. درخواست بازگشت وجه داده شود.
                    $client->call('bpReversalRequest', $parameters, $namespace);			
                    echo 'Error : '. $result;
                }
            } else {
                //-- وریفای به مشکل خورد٬ نمایش پیغام خطا و بازگشت زدن مبلغ
                $client->call('bpReversalRequest', $parameters, $namespace);
                echo 'Error : '. $result;
            }
        } else {
            //-- پرداخت با خطا همراه بوده
            echo 'Error : '. $request->input('ResCode');
        }
    }
    public function getName():string
    {
        return "mellat";
    }
    private function transactionSuccess($order , $refNum)
    {
        return [
            'status' => self::TRANSACTION_SUCCESS,
            'order' => $order,
            'refNum' => $refNum,
            'gateway'=> $this->getName()
        ];
    }
    private  function getOrder($resNum)
    {
        return Order::where('code' , $resNum)->firstOrFail();
    }
    private function transactionFailed()
    {
        return [
            'status' => self::TRANSACTION_FAILED
        ];
    }
}