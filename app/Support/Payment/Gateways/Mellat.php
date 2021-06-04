<?php
namespace App\Support\Payment\Gateways;

use App\Support\Payment\Gateways\GatewayInterface;
use DateTime;
use Illuminate\Http\Request;
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
    private function redirectToBank($order , $amount)
    {
        $dateTime = new DateTime();
        $amount = $order->amount + 10000;
        $userid = auth()->user()->id;
		$this->soapClient = new SoapClient($this->serverUrl);

        if($amount && $amount > 100 && $order->id ) {
            $parameters = [
                'terminalId' => '5453042',
                'userName' => 'iranturan123',
                'userPassword' => '20862902',
                'orderId' => $order->id,
                'amount' => $amount,
                'localDate' => date("Ymd"),
                'localTime' => date("His"),
                'additionalData' => auth()->user()->phone_number,
                'callBackUrl' => $this->callback,
                'payerId' => '0'
            ];

            try {

                // Call the SOAP method
                $result = $this->soapClient->bpPayRequest($parameters);
                dd($result);
                // Display the result
                $res = explode(',', $result->return);
                if ($res[0] == "0") {
                    //dd('inja');
                    return [
                        'result' => true,
                        'res_code' => $res[0],
                        'ref_id' => $res[1]
                    ];
                } else {
                    return [
                        'result' => false,
                        'res_code' => $res[0],
                        'ref_id' => isset($res[1]) ? $res[1] : null
                    ];
                }
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        }
    }
    public function verify(Request $request)
    {
        
    }
    public function getName():string
    {
        return "saman";
    }
}