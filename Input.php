<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return (isset($_REQUEST[$key])) ? True : False;
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        return (self::has($key)) ? $_REQUEST[$key] : $default;
    }

    /**
     * Filter user input for code 
     *
     * @param string $input any user input submitted via GET or POST
     * @return string value of user filtered input
     */
    public static function escape($input)
    {
        return htmlspecialchars(strip_tags($input));
    }

    public static function getString($key, $min = 0, $max = 1000000)
    {
        // Checking parameters
        if (!is_string($key)) {
            throw new InvalidArgumentException("$key is not a string.");
        }
        if(!is_numeric($min) || !is_numeric($max)) {
            throw new InvalidArgumentException("$min and/or $max is not a number.");
        }
        if (strlen(self::get($key)) < $min || strlen(self::get($key)) > $max) {
            throw new LengthException("String length invalid.");
        }

        // Checking values
        if (!self::has($key)) {
            throw new OutOfRangeException("No key given.");
        } else if (!is_string(self::get($key))) {
            throw new DomainException("Value entered must be a string.");
            
        } else {
            return self::escape(self::get($key));
        }
    }

    public static function getNumber($key, $min = 0, $max = PHP_INT_MAX)
    {

        // Checking parameters
        if (!is_string($key)) {
            throw new InvalidArgumentException("$key is not a string.");
        }
        if(!is_numeric($min) || !is_numeric($max)) {
            throw new InvalidArgumentException("$min and/or $max is not a number.");
        }
        if (self::get($key) < $min || self::get($key) > $max) {
            throw new RangeException("Number length invalid.");
        }

        // Checking values
        if (!self::has($key)) {
            throw new OutOfRangeException("$key has no value.");
        } else if (!is_numeric(self::get($key))) {
            throw new DomainException("$key must be entered as a number.");
        } else {
            return self::get($key);
        }
    }


    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
