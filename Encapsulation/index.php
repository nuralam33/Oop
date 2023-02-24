<?php

class Fruit{

    public $name;

    public $color;

    public function demo($name,$color)
    {
        echo "This Furit name is .$name. and color name is .$color.";
    }
}

$xyz = new Fruit();

$xyz->demo('Mengo','Yellow');


?>