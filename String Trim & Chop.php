<?php
$originalString = "   Hello, world!   ";
$trimmedString = trim($originalString);
echo $trimmedString;


$originalString = "___Hello, world!___";
$trimmedString = trim($originalString, "_");
echo $trimmedString;

$originalString = "Hello, world!   ";
$choppedString = chop($originalString);
echo $choppedString;


$originalString = "Hello, world!___";
$choppedString = chop($originalString, "_");
echo $choppedString;

?>