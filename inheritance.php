<?php

class Animal
{
    function say()
    {
        echo 'Making sounds...' . PHP_EOL;

    }
    function legs()
    {
        echo '4' . PHP_EOL;
    }
}

class Fish extends Animal
{
    function say()
    {
        echo 'silence' . PHP_EOL;
    }


    function legs()
    {
        echo '0' . PHP_EOL;
    }

    function swim()
    {
        echo 'swimming' . PHP_EOL;
    }
}

class Tiger extends Animal
{
    function say()
    {
        echo 'Rrrrr' . PHP_EOL;
    }
}

class Cat extends Animal
{
    function say()
    {
        echo 'Meow' . PHP_EOL;
    }
}

$tiger_murzik  = new Tiger;
$cat_stepan    = new Cat;
$fish          = new Fish;

$tiger_murzik->say();
$tiger_murzik->legs();
$cat_stepan->say();
$cat_stepan->legs();
$fish->say();
$fish->legs();
$fish->swim();


?>