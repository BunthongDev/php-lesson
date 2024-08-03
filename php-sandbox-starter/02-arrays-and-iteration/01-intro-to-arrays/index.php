<?php

$name = array('Hou', 'Jack', 'Jill'); // method 1
$numbers = [12, 34, 24]; // method 2


function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}


inspect('$name');
inspect('$numbers');

// add element to array
$numbers[] = 100;
$numbers[] = 1001;
$numbers[2] = 200;
unset($numbers[2]);

$numbers = array_values($numbers);

inspect($numbers);

print count ($numbers) ."</br>"; 
echo count($name);