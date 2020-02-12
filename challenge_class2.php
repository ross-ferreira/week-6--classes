Create a class that represents a light switch

<?php

declare(strict_types=1);

class LightSwitch
{

    private $on = false;

    public function turnOn() : void
{
    
        $this->on = true;   // set the on property to true
}

    public function turnOff() : void
{
    
        $this->on = false;     // set the on property to false
}

    public function isOn() : bool
{
    
        return $this->on; // return the value of the on property
}

}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
var_dump($lightSwitch->isOn()); // bool(false)

// you can turn it on
$lightSwitch->turnOn(); //setting method
var_dump($lightSwitch->isOn()); // bool(true)

// you can turn it off
$lightSwitch->turnOff(); //setting method
var_dump($lightSwitch->isOn()); // bool(false)


