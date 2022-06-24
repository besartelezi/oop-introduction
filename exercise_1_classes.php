<?php

declare(strict_types=1);

class Beverage {
    //classes are blueprints, they are a tool for creating objects
    public string $color;
    public float $price = 0;
    public string $temperature = "cold";
    //these variables are called properties
    //they serve as different qualities of the object that we want to create
    //we must also declare what kind of properties they are, for example, the price will be a number with a comma, so it's a float

    public function __construct(string $color, float $price, string $temperature) {
        $this->color =$color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    //The constructor is, quite literally, the thing that constructs the object.

    public function getInfoBeverage () :string {
        return("this beverage is " . $this->temperature . " and " . $this->color);
    }
}
$cola = new Beverage("black", 2, "cold");
// This is an object created from the beverage class
// We set the values in the brackets, then those values get assigned to different properties in the class
// And finally, in the constructor it gets created into an object

print_r ($cola->getInfoBeverage() . "<br>");


/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/