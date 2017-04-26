<?php

/**
 * Created by PhpStorm.
 * User: INtellekt_001
 * Date: 26.04.2017
 * Time: 14:35
 */
class Cat
{
    private $name;
    private $type;
    //private $color;

    public function __construct($name = 'Unknown cat')
    {
        $this->name = $name;
        $this->TypeDefinder();
    }

    private function typeDefinder()
    {
        $this->type = 'Street cat';
        if($this->name === 'Kasya')
        {
            $this->type = 'Neva harlekin';
        }
        elseif($this->name === 'Bojena')
        {
            $this->type = 'Sami';
        }
    }

     public function getNameType()
     {
         return $this->name.' '.$this->type;
     }


}