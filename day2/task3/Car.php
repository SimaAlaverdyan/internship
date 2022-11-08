<?php

abstract class Car
{
    protected $date;
    protected $color;
    protected $speed;
    protected $gearBox;

    public function __construct($date, $color, $speed, $gearBox)
    {
        $this->date = $date;
        $this->color = $color;
        $this->speed = $speed;
        $this->gearBox = $gearBox;
    }
    public function getDate()
    {
        return $this->date;
    }
    abstract public function sayHello() : string;
}

class Audi extends Car
{
    public function sayHello() : string
    {
        $str = "Hello from Audi. I was born in " . $this->date;
        return $str;
    }
}

class Honda extends Car
{
    public function sayHello() : string
    {
        $str = "Hello from Honda. I was born in " . $this->date;
        return $str;
    }
}

$audi = new Audi(2020, "red", 150, "automate");
$honda = new Honda(2019, "blue", 100, "manual");
echo $audi->sayHello();
echo "<br>";
echo $honda->sayHello();
