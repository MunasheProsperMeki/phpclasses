<?php

namespace App;

trait ApplyDiscount
{
    public function applyDiscount($price, $discount)
    {
        $discountPercentage = $discount / 100;
        $discount = $discountPercentage * $price;
        $discountedPrice = $price - $discount;

        return $discountedPrice;
    }
}