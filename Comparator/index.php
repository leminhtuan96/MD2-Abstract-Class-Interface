<?php

include "CircleComparator.php";

$circleOne = new Circle("circleOne", 5);
$circleTwo = new Circle("circleTwo", 5);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));
//var_dump () là hiển thị kiểu trả về của biến
