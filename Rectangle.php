<?php 

class Rectangle
{
    private $width;
    private $height;

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function __construct($width, $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function perimeter()
    {
        return 'The perimeter is ' . ($this->height * 4);
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

