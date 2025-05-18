<?php

$colors = array(0 => "red", 1 => "blue", 2 => "green");

for ($i = 0; $i < 3; $i++) {
    echo $colors[$i] . '<br>';
}

$car = array("make" => "ali", "model" => "2023", "year" => "2024");
echo $car['model'] . '<br>';


$students = array(array("name" => "ali", "major" => "ilas"), array("name" => "mohamed", "major" => "rida"), array("name" => "ahmad", "major" => "ayman"));
foreach($students as $sl){
    
   
    echo $sl['major'].'<br>';
}
