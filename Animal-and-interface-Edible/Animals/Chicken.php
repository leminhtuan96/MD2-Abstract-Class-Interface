<?php
include_once(dirname(__FILE__) . "/../AbstractClass/Animal.php");
include_once (dirname(__FILE__)."/../InterfeceClass/Edible.php");


class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "chicken: cluck-cluck!";
        // TODO: Implement makeSound() method.
    }

    public function howToEat()
    {
        return "could be fried";
        // TODO: Implement howToEat() method.
    }
}