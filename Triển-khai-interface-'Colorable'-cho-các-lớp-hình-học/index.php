<?php
include_once "Square.php";
include_once (dirname(__FILE__)."/../InterfaceResizeable/Circle.php");
include_once (dirname(__FILE__)."/../InterfaceResizeable/Rectangle.php");

$geometry[] = new Circle("circle",10);
$geometry[] = new Square(10,"Square");
$geometry[] = new Rectangle(50,40);

foreach ($geometry as $item) {
    echo $item->getName() . " có area = " . $item->getArea() . "<br>";
    if ($item instanceof Square) {
        echo $item->howToColor() . "<br>";
    }
}