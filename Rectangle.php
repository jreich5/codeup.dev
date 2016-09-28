<?php 

class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height  = $height;
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

