<?php

//class definition
class Cars {
//object blueprint

}

$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
    echo $class . "<br>";
}

?>
