<?php

declare(strict_types=1);

class Beverage {
    public string $color;
    public float $price = 0;
    public string $temperature = "cold";

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
    public string $name;
    public float $alcoholPercentage = 0;

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
/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/