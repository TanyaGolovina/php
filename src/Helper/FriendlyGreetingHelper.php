<?php

/**
 * Created by PhpStorm.
 * User: INtellekt_001
 * Date: 26.04.2017
 * Time: 16:34
 */
class FriendlyGreetingHelper extends AbstractGreetingHelper
{
    public function __construct($message = 'Hi')
    {
        $this->message = $message;
    }

    public function sayHello($name = 'Guest')
    {
        return $this->message.' '.$name;
    }
}