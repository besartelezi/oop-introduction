<?php

declare(strict_types=1);

class Beverage {
    protected string $color;
    protected float $price = 0;
    protected string $temperature = "cold";

    public function __construct(string $color, float $price, string $temperature) {
        $this ->color =$color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function setColor ($Duvel) {
        $this->color = $Duvel;
    }

    public function getColor() :string {
        return $this->color;
    }
    public function getPrice() :float {
        return $this->price;
    }
    public function getTemperature () :string {
        return $this->temperature;
    }


    public function getInfoBeverage () :string {
        return("this beverage is " . $this->temperature . " and " . $this->color . " ");
    }

}

class Beer extends Beverage {
    protected string $name;
    protected float $alcoholPercentage = 0;

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage= $alcoholPercentage;
    }

    public function getName () :string {
        return $this->name;
    }

    public function getAlcoholPercentage () :float {
        return $this->alcoholPercentage;
    }
    private function beerInfo () :string {
        return("Hi I'm " . $this->name . " and I have an alcohol percentage of " .$this->alcoholPercentage . " and I have a " . $this->color . " color." );
    }
    public function getBeerInfo () :string{
        return $this->beerInfo();
    }
}
$Duvel = new Beer("blond", 3.5, "cold", "Duvel", 8.5);
print_r($Duvel->getAlcoholPercentage() . "%" . "<br>");
echo($Duvel->getAlcoholPercentage() . "%" . "<br>");
print_r($Duvel->getColor(). "<br>");
print_r($Duvel->getInfoBeverage() . "<br>");
$Duvel->setColor("light");
print_r($Duvel->getInfoBeverage() . "<br>");
print_r($Duvel->getBeerInfo());


/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/