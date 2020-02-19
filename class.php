<?php
class car{
public function __construct($color,$year,$power){
    $this->color = $color;
    $this->year = $year;
    $this->power = $power;
    $car = "the car is ".$this->color." and is ".$this->year ." and her power is ".$this->power;
    echo $car;
}
}
$nc = new car('black',2020,500);
?>