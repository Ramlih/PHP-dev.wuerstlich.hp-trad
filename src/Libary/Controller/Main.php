<?php
namespace Controller;

class Main
{
    private $message;

    public function __construct()
    {
        
        echo 'Controller\Main';
        $this->message = 'Hallo! Ich bin Controller\Main.<br>';
        $obj = new My_Class();
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}

