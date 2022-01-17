<?php

include_once "Circle.php";
include_once "Comparable.php";

//implements lấy thuộc tính của Comparable

class ComparableCircle extends Circle implements Comparable
{
    public function compareTo($objTwo)
    {
//        $circleTwoRadius = $objTwo->getRadius();
        if ($this->getRadius() > $objTwo->getRadius()){
            return 1;
        }else if($this->getRadius() <$objTwo->getRadius()){

            return -1;
        }else {
            return 0;
        }
    }
}