<?php

declare(strict_types=1);

class Beverage {
    private string $color;
    private float $price = 0;
    private string $temperature = "cold";

    public function __construct(string $color, float $price, string $temperature) {
        $this ->color =$color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfoBeverage () :string {
        return("this beverage is " . $this->temperature . " and " . $this->color . " ");
    }
}
$cola = new Beverage("black", 2, "cold");
print_r ($cola->getInfoBeverage() . "<br>");

class Beer extends Beverage {
    private string $name;
    private float $alcoholPercentage = 0;

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage= $alcoholPercentage;
    }

    public function getAlcoholPercentage () :float {
        return $this->alcoholPercentage;
    }
}
$Duvel = new Beer("blond", 3.5, "cold", "Duvel", 8.5);
print_r($Duvel->getAlcoholPercentage() . "%" . "<br>");
echo($Duvel->getAlcoholPercentage() . "%" . "<br>");
print_r($Duvel->color. "<br>");
print_r($Duvel->getInfoBeverage() . "<br>");

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/