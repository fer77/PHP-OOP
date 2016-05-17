<?php

class Cars {

  function greeting() {

  }

  function greeting2() {

  }

}

//If we want to find out if the method greeting exist somewhere.
$the_methods = get_class_methods("Cars"); //$the_methods will convert into an array.

foreach ($the_methods as $method) {
  echo $method . "<br>";
}
