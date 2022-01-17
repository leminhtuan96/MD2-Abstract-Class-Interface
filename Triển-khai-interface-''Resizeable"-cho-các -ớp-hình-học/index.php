<?php

include_once "Rectangle.php";
include_once "Circle.php";

$geomytry[] = new Rectangle(30,20);
$geomytry[] = new Circle("circle",10);

echo "kich thuoc ban dau: ";
foreach ($geomytry as $item){
    print_r($item);
}
$percent = rand(1,100);

echo "kich thuoc sau khi thay doi: ".$percent."%";
echo "<br>";
foreach ($geomytry as $item){
    $item->resize($percent);
    print_r($item);
}