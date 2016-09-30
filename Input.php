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

    public static function getString($key)
    {
        if (!self::has($key)) {
            throw new Exception("$key has no value.");
        } else if (!is_string(self::get($key))) {
            throw new Exception("$key was not entered as a string.");
        } else {
            return self::get($key);
        }
    }

    public static function getNumber($key)
    {
        if (!self::has($key)) {
            throw new Exception("$key has no value.");
        } else if (!is_numeric(self::get($key))) {
            throw new Exception("$key must be entered as a number.");
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
