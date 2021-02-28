<?php
namespace App\Support\Payment\Gateways;

use Illuminate\Http\Request;
interface GatewayInterface
{
    const TRANSACTION_FAILED = 'transaction.failed';
    const TRANSACTION_SUCCESS = 'transaction.success';
    public function pay($order);
    public function verify(Request $request);
    public function getName():string;
}