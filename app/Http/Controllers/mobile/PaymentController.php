<?php

namespace App\Http\Controllers\mobile;

use App\Http\Controllers\Controller;
use App\Market;
use App\Support\Payment\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private $transaction;
    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }
    public function verify(Request $request , Market $market)
    {
        return $this->transaction->verify()
        ? $this->sendSuccessResponse($market)
        : $this->sendErrorResponse($market);
    }
    private function sendErrorResponse(Market $market)
    {
        return redirect()->route('mobile.response.failed',$market->id);
    }
    private function sendSuccessResponse(Market $market)
    {
        return redirect()->route('mobile.response.success',$market->id);
    }
    public function failed(Market $market)
    {
        return view('mobile.response.failed' , compact('market'));
    }
    public function success(Market $market)
    {
        return view('mobile.response.success',compact('market'));
    }
}
