<?php

/**
 * Created by PhpStorm.
 * User: INtellekt_001
 * Date: 21.04.2017
 * Time: 16:27
 */
class GreetingHelper
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

//    public function getMessage()
//    {
//        return $this->message;
//   }
    public function sayHello($name = 'Guest')
    {
        return $this->message.' '.$name;
    }

}