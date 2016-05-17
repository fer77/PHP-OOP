<?php

//Class definition: think of a class as a template or blue-print from which we can create other objects.
class Cars {

}

$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
    echo $class . "<br>";
}

?>
