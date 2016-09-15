<?php 

class Log 
{
    public $filename;
    
    public $handle;

    public function __construct($prefix = 'log')
    {
        $this->filename = $prefix . date("Y-m-d");
        $this->handle = fopen($this->filename, 'a');
    }

    public function logMessage($logLevel, $message)
    {
        if (!isset($logLevel) || !isset($message)) {
            echo 'File arguments missing. Please enter log level and message.';
            die;
        }
        fwrite($this->handle, date("Y-m-d h:m:s") . " " . "[" . $logLevel . "]" . " " . $message . PHP_EOL);
    }
    
    public function logError($message) 
    {
        $this->logMessage('ERROR', $message);
    } 
    
    public function logInfo($message) 
    {
        $this->logMessage("INFO", $message);
    }
    
    public function __destruct()
    {
        fclose($this->handle);
    }
}



