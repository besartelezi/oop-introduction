<?php

declare(strict_types=1);

class Beverage {
    private string $color;
    private float $price = 0;
    private string $temperature = "cold";

    public function __construct(string $color, float $price, string $temperature) {
        $this->color =$color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfoBeverage () :string {
        return("this beverage is " . $this->temperature . " and " . $this->color);
    }

    public function theEconomyIsInShambles (float $newPrice) :string {
       if ($this->price < $newPrice) {
           return ("The new price is " . $newPrice);
       }
       else {
           return ("Stop! You have violated the Law!");
       }
    }

}
$cola = new Beverage("black", 2, "cold");
print_r ($cola->getInfoBeverage() . "<br>");
print_r($cola->theEconomyIsInShambles(3.5));

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/