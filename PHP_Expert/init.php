<?php

define('FOO',5);
const BAR = 10;
const BAR = 2; // Ne marche pas
$res = 100*FOO;
echo $res.' '.BAR;

$array = array(1,2,3);
$array = [1,2,3];

echo $array[0]."<br>";

// push d'une valeur à la fin d'un tableau automatiquement

$array[] = 5;

array_push($array,6);
var_dump($array);
?>