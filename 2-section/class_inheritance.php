<?php

class Cars {

  var $wheels = 4;

  function greeting() {
    return "Hello";
  }

}

//Instanciate Cars class.
$bmw = new Cars();

//For the new class to inherit something use the keyword 'extends' and name the class inheriting from.
class Trucks extends Cars {

var $wheels = 6; //Assigning a new value will overide the inherited property, otherwise inherit value will be default.

}

$tacoma = new Trucks();
echo $tacoma->wheels;
