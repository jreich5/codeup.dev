<?php 

class Model
{
    protected $attributes = [];

    protected static $table;

    public static function getTableName()
    {
        return static::$table;
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }
    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return null;
    }

}

// $test = new Model;
// $test->money = 'talks';
// $test->does = 'this work?';
// var_dump($test->does);