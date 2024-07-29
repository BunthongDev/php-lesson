<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/


// String 
$name = "John Doe";
var_dump($name);

echo "$name";



//array

$friends = ['John', 'Mey', 'Dy'];
var_dump($friends);

//Object 
$person = new stdClass();
var_dump($person);

echo '<br />';

//null 
$car = null;
var_dump($car);


//resource 
echo '<br />';

$file = fopen('sample.txt', 'r');
var_dump($file);
