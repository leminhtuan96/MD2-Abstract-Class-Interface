<?php

include_once "Resizeable.php";

class Circle implements Resizeable{
    public $name;
    public $radius;

    /**
     * @param $name
     * @param $radius
     */
    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    public function getArea()
    {
        return 2*pi()*pow($this->radius,2);
    }

    public function resize($percent)
    {
        $this->radius=$this->radius*2*$percent/100;
        // TODO: Implement resize() method.
    }
}
