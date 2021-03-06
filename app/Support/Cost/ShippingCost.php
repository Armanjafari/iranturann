<?php
namespace App\Support\Cost;

use App\Support\Cost\Contracts\CostInterface;
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
        return $this->SHIPPING_COST;
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