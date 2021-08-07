<?php
namespace App\Support\Cost;

use App\Support\Cost\Contracts\CostInterface;
use GhaniniaIR\Shipping\Shipping;
use Illuminate\Http\Request;

class ShippingCost implements CostInterface
{
    private $SHIPPING_COST = 0;
    private $cost;
    public function __construct(CostInterface $cost)
    {
        $this->cost = $cost;
        // dd($cost->basket->add(1));
    }
    public function setCost(Request $request)
    {
        foreach ($this->cost->basket->all() as $full) {
            $this->SHIPPING_COST += $full->product->pure->weight;
        }
        
    }
    public function getCost()
    {
        // dd(Shipping::pishtaz(5,1,6000)->getPrice());
        // return Shipping::pishtaz(22,5,5000)->getPrice() / 10;
        return 0;
    }
    public function getTotalCosts()
    {
        return $this->cost->getTotalCosts() + $this->getCost();
    }
    public function persianDescription()
    {
        return ' هزینه حمل و نقل ';
    }
    public function getSummary()
    {
        return array_merge($this->cost->getSummary() , [$this->persianDescription() => $this->getCost()]);
    }
}