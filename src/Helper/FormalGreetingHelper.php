<?php

/**
 * Created by PhpStorm.
 * User: INtellekt_001
 * Date: 26.04.2017
 * Time: 16:33
 */
class FormalGreetingHelper extends AbstractGreetingHelper
{

    public function __construct($message = 'Hello')
    {
        $this->message = $message;
    }

}