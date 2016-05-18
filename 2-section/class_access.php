<?php

//Access Control Modifiers: Special keywords in PHP used to control the flow of our program.  They are: Public, Private, and Protected.

class Cars {
//Creating modifiers
  Public $wheel_count = 4; //This property can be used anywhere in the script.
  Private $door_count = 4; //This property can only be used within this class.
  Protected $seat_count = 2; //This property can be accessed within this class and its subclasses (inherited or extends)

  function car_detail() {

    echo $this->wheel_count;
    echo $this->door_count;
    echo $this->seat_count;

  }

}

$bmw = new Cars();

// echo $bmw->wheel_count;
//echo $bmw->door_count; //"Cannot access private property Cars"
//echo $bmw->seat_count; //"Cannot access protected property Cars"
//All properties, however, are available inside the class:
$bmw->car_detail();
