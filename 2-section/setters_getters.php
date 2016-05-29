<?php

//Access Control Modifiers: Special keywords in PHP used to control the flow of our program.  They are: Public, Private, and Protected.

class Cars {
//Creating modifiers
  
  Private $door_count = 4; //This property can only be used within this class.
  

  function get_values() {

    echo $this->door_count;

  }

  function set_values() {

    $this->door_count = 2;

  }

}

$bmw = new Cars();

$bmw->set_values(); //This way we can access info in Private modifiers.

$bmw->get_values(); //This way we can access info in Private modifiers.
