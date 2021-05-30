<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $fillable = ['user_id', 'code','amount'];
    public function products()
    {
        return $this->belongsToMany(Full::class)->withPivot('quantity','market_id');
    }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function generateInvoice()
    {
        $pdf = \PDF::loadView('order.invoice',['order' => $this]);
        return $pdf->save(storage_path('app/public/invoices/') . $this->id . '.pdf');
    }
}