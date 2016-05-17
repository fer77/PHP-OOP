<?php

//Instances are objects created from a class (template).

class Cars {

  function greeting() {

    echo "Hello Fernando";

  }

}

//bmw instance, diffrent values can be added as we continue to work eith this object.
$bmw = new Cars();
$bmw->greeting();

//mercedes instance.
$mercedes = new Cars();
