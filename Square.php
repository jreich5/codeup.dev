<?php 

require_once 'Rectangle.php';

class Square extends Rectangle
{
    public function __construct($height)
    {
        parent::__construct($height, $height);
    }

    public function perimeter()
    {
        return 'The perimeter is ' . ($this->getHeight() * 4);
    }

    public function area()
    {
        return $this->getWidth() * $this->getHeight();
    }
}
