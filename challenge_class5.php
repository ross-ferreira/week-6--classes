<?php

declare(strict_types=1);

class Stringy
{

private $word;

public function __construct(string $word)
{
    $this->word=$word;
}

public function lower()
{
    return strtolower($this->word);
}
public function upper()
{
    return strtoupper($this->word);
}

public function append($x)
{
    return ($this->word).$x;
}

public function repeat($y)
{
   return str_repeat($this->word,$y);
}

}

$string = new Stringy("Na");

// it can lowercase a string
var_dump($string->lower()); // string(2) "na"

// it can uppercase a string
var_dump($string->upper()); // string(2) "NA"

// it can concatenate
var_dump($string->append("blah")); // string(6) "Nablah"

// it can repeat a string
var_dump($string->repeat(5)); // string(10) "NaNaNaNaNa

// Create a class that lets you do things with a string.