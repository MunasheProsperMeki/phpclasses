<?php

namespace App;
require_once('ApplyDiscount.php');
use App\ApplyDiscount;

class Kopje
{
    use ApplyDiscount;

    public $about = 'Coffee Shop';
    public $location = 'Harare';
    public $price = 5;
    public $isGoodShop = true;
    public $employees = 3;
    public $employeeNames = ['name'=> 'Munashe','name'=>'Takunda','name'=>'Prince'];

    public function getDetails()
    {
        echo "Kopje is $this->about found in $this->location and coffee costs $this->price.
        They have $this->employees workers and it is $this->isGoodShop shop.";
    }

    public function loyalCustomers()
    {
       $price = $this->applyDiscount($this->price, 20);

       echo "$price";
    }

    public function ordinaryClients()
    {
        $price = $this->price; 

        echo "$price";
    }

   
}

$kopje = new Kopje;
echo $kopje -> getDetails();