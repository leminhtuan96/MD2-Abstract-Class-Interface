<?php

class Circle
{
    public $radius;
    public $namme;

    public function __construct($namme, $radius)
    {
        $this->radius = $radius;
        $this->namme = $namme;
    }



    public function getRadius()
    {
        return $this->radius;
    }


    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    public function getNamme()
    {
        return $this->namme;
    }


    public function setNamme($namme)
    {
        $this->namme = $namme;
    }



}