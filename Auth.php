<?php 

require_once 'Log.php';

class Auth
{

    // Hashed form of the string 'password'
    public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
    
    // Logs every successfull and failed attempt to log in
    public static function attempt ($username, $password) 
    {
        $logInfo = new Log();
        if ($username == 'guest' && password_verify($password, self::$password) == true) {
            $_SESSION['logged_in_user'] = $username;
            $logInfo->logMessage('SUCCESS', "User $username logged in.");
            return true;
        } else {
            $logInfo->logMessage('FAIL', "User $username failed to log in.");
            return false;
        }
    }

    // Redirects based on argument
    public static function redirect ($path)
    {
        header("Location: $path");
        die;
    }

    // Checks login status
    public static function check () 
    {
        return isset($_SESSION['logged_in_user']);
    }
    
    // Stores the name of the user
    public static function user () 
    {
        return (isset($_SESSION['logged_in_user'])) ? $_SESSION['logged_in_user'] : null;
    }
    
    // Clears out all old sessions
    public static function logout () 
    {
        session_unset();
        session_destroy();
        session_regenerate_id(true);
        session_start();
    }
}