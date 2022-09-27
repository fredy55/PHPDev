<?php 

//Introduction

/**
 * 1) Inheritance
 * 2) Abstraction
 * 3) Encapsulation
 * 4) Polymophism
 * 
 * Pascal
 * 
 * variables
 */


 class Car{

    //property
    public $colour;

    //Constructor
    function __construct($wheels, $colour){
       echo "Every car has {$wheels} tires! <br>";
       $this->colour = $colour;
    }

    //Regular Method
    function speed(int $value, string $brand){
        return "The speed of {$this->colour} {$brand} cars is {$value}km/hr";
    }
 }

 //Instantiation of the 'Car' class
//  $Toyota = new Car();
 $Honda = new Car('four', 'silver');

 echo $Honda->speed(80, 'Honda Pilot').'<br>';
//  echo $Toyota->speed(75, 'Toyota Venza');