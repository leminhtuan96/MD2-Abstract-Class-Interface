<?php
include_once "Colorable.php";

class Square implements Colorable {
    public $width;
    public $name;

    /**
     * @param $width
     * @param $height
     */
    public function __construct($width, $name)
    {
        $this->width = $width;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getArea()
    {
       return $this->width*$this->width;
    }


    public function howToColor()
    {
        echo "color all four sides";
    }
}
