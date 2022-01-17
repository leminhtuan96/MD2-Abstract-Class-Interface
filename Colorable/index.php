<?php
include_once "Square.php";
include_once (dirname(__FILE__)."/../Resizeable/Circle.php");
include_once (dirname(__FILE__)."/../Resizeable/Rectangle.php");

$geometry[] = new Circle("circle",10);
$geometry[] = new Square(10,"Square");
$geometry[] = new Rectangle(50,40);

foreach ($geometry as $item) {
    echo $item->getName() . " có area = " . $item->getArea() . "<br>";
    if ($item instanceof Square) {
        echo $item->howToColor() . "<br>";
    }
}