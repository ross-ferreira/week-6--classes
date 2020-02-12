<?php

declare(strict_types=1);

class Address
{
    private $Street;
    private $Postcode;
    private $Town;


    public function __construct(string $Street, string $Postcode, string $Town)
    {
        $this->Street=$Street;
        $this->Postcode=$Postcode;
        $this->Town=$Town;
    }

    public function setStreet($street)
    {
        $this->Street=$street;
        return $this;
    }

    public function setPostcode($pcode)
    {
        $this->Postcode=$pcode;
        return $this;
    }

    public function setTown($town)
    {
        $this->Town=$town;
        return $this;
    }

    public function fullAddress()
    {
        $faddress=[$this->Street,$this->Postcode,$this->Town];
        return implode(", ",$faddress);
    }



}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
var_dump($address->fullAddress()); // string(34) "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
// using chaining
$address->setStreet("12 Cantelope Way")->setPostcode("SW5 8RQ")->setTown("Swansea");

// logs the new full address neatly
var_dump($address->fullAddress()); // string(34) "12 Cantelope Way, SW5 8RQ, Swansea"

// Create a class that represents an address - use different properties for each part of the address. It should have a fullAddress method, which will return the full address as a nicely formatted string.

// Hint: PHP has an implode() function, which is similar to join() in JS