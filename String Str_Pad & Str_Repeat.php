<?php
$originalString = "Hello";
$paddedString = str_pad($originalString, 10, "_");
echo $paddedString;

$originalString = "Hello";
$paddedString = str_pad($originalString, 10, "_", STR_PAD_LEFT);
echo $paddedString;


$originalString = "ABCD";
$repeatedString = str_repeat($originalString, 3);
echo $repeatedString;

?>