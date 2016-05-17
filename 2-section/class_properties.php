<?php

//Instances are objects created from a class (template).

class Cars {
//Declaring a property
  var $wheel_count = 4;
  var $door_count = 4;

  function car_detail() {

//A class can refrence itself using the 'this' keyword.
    return "This car has " . $this->wheel_count . " wheels";

  }

}

//bmw instance, diffrent values can be added as we continue to work with this object.
$bmw = new Cars();
//Accessing properties (no $ needed).
echo $bmw->wheel_count = 10; //A property can be changed here, by assigning a new value.

echo "<br>";

$mercedes = new Cars();
echo $mercedes->wheel_count;

echo "<br>";

echo $mercedes->car_detail();

echo "<br>";

echo $bmw->car_detail();
