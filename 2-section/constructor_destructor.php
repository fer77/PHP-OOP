<?php

class Cars {
//Creating modifiers
  Public $wheel_count = 4; //This property can be used anywhere in the script.
  static $door_count = 2; 

  function __construct() {

    //echo $this->wheel_count;
    echo self::$door_count++; //Static properties can be called inside our construct.

  } // Everytime this construct method is estanciated, it gets called.  It doesn't need to be called like regular methods.

  function __destruct() {

    //echo $this->wheel_count;
    echo self::$door_count--; //Substract instead of increase.  Not used much in PHP.

  } 

  /*
  function details()
  {

  	echo $this->wheel_count;
  
  }
   */ //This method needs to be called below to get a value.

} 

$bmw = new Cars();
$vw = new Cars(); //Door value will continue to increase, because the value is maintained by the last instance.
$ford = new Cars();

//$bmw->details();