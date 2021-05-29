<?php
namespace App\Support\Cost;

use App\Support\Cost\Contracts\CostInterface;
use GhaniniaIR\Shipping\Shipping;
use Illuminate\Http\Request;

class ShippingCost implements CostInterface
{
    private $SHIPPING_COST = 20000;
    private $cost;
    public function __construct(CostInterface $cost)
    {
        $this->cost = $cost;
        // dd($cost->basket->add(1));
    }
    public function setCost(Request $request)
    {
        // TODO set this !
        
    }
    public function getCost()
    {
        // dd($this->cost->basket->all()); // TODO start here 29 may
        // dd(Shipping::pishtaz(5,1,6000)->getPrice());
        return Shipping::pishtaz(22,5,5000)->getPrice() / 10;

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