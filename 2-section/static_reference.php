<?php

class Cars {

  Static $wheel_count = 2; //Static property

//The Static keyword can also be attached to a method:
  Static function car_detail() {

    return self::$wheel_count; 

  } //Static method returns the value of $wheel_count.

}

class Trucks extends Cars {
	static function display() {
		echo parent::car_detail();
	} // This method calls the car_detail() method.
} // This class is inheriting all the functionality of the Cars class.

Trucks::display();