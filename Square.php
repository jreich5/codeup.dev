<?php 

class Square extends Rectangle
{
    public function __construct($height)
    {
        parent::__construct($height, $height);
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
