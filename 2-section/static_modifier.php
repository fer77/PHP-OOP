<?php

//"Regular" property vs static modifier: regular properties attaches to the instance.  Static modifiers do not attache to the instance, they are attached to their Class.

class Cars {

  Static $wheel_count = 4;
  Static $door_count = 2;

//The Static keyword can also be attached to a method:
  Static function car_detail() {

    echo Cars::$wheel_count; //When declaring a Static Method the $this keyword is not needed.
    echo Cars::$door_count;

  }

}

$bmw = new Cars();
//echo $bmw->wheel_count;
//echo Cars::$door_count; //$ is needed for properties when using Static modifiers.
Cars::car_detail(); //$ is not needed for methods.
