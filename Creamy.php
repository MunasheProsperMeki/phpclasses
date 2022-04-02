<?php

namespace App;
require_once('ApplyDiscount.php');
use App\ApplyDiscount;

class Creamy extends Kopje
{
    use ApplyDiscount;
    
    public $coffeeType = "Creamy";
    public $price = 10;

    public function loyalCustomers()
    {
        $price = $this->applyDiscount($this->price, 40);

        echo "$price";
    }
}

