<?php

include_once "Resizeable.php";

class Rectangle implements Resizeable
{
    public $height;
    public $width;

    /**
     * @param $height
     * @param $width
     */
    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
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
    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getArea()
    {
        $this->width * $this->height;
    }

    public function resize($percent)
    {
        $this->width = $this->width * 2 * $percent / 100;
        $this->height = $this->height * 2 * $percent / 100;
    }

}
