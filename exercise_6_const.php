<?php

declare(strict_types=1);

class Beverage {
    private string $color;
    private float $price = 0;
    private string $temperature = "cold";

    //Constants are identifiers for simple values
    //But the thing that sets them the most apart, is that they are automatically global across the entire script.
    const BARNAME= "Het Vervolg";

    public function __construct(string $color, float $price, string $temperature) {
        $this ->color =$color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfoBeverage () :string {
        return("this beverage is " . $this->temperature . " and " . $this->color . " ");
    }

    public function getBarnameBeverage () : string{
        return ("Welcome to the extravagant bar, " . self::BARNAME);
    }

}
$cola = new Beverage("black", 2, "cold");

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

    public function getBarnameBeer () : string{
        return ("Welcome to the extravagant bar, " . self::BARNAME . " where we serve cold beers to hot dears!");
    }

}
$Duvel = new Beer("blond", 3.5, "cold", "Duvel", 8.5);
print_r(Beverage::BARNAME . "<br>");

print_r($cola->getBarnameBeverage() . "<br>");
print_r($Duvel->getBarnameBeer() . "<br>");

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