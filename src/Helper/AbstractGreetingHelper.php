<?php

/**
 * Created by PhpStorm.
 * User: INtellekt_001
 * Date: 26.04.2017
 * Time: 16:57
 */
class AbstractGreetingHelper implements GreetingHelperInterface
{
    protected $message;
    public function sayHello($name = 'Guest')
    {
        return $this->message.' '.$name;
    }
}