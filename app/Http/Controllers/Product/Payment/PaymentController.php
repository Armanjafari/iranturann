<?php

namespace App\Http\Controllers\Product\Payment;

use App\Http\Controllers\Controller;
use App\Support\Payment\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private $transaction;
    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }
    public function verify(Request $request)
    {
        $verify =  $this->transaction->verify();
        $this->sendSuccessResponse();
        $this->sendErrorResponse();
    }
    private function sendErrorResponse()
    {
        return redirect()->route('product.index')->with('error' , ' مشکلی در هنگام ثبت سفارش به وجود امده است ');
    }
    private function sendSuccessResponse()
    {
        return redirect()->route('product.index')->with('success' , ' سفارش با موفقیت ثبت شد ');
    }
}
