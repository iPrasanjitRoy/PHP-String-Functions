<?php
$originalString = "Hello, World!";
$encodedString = convert_uuencode($originalString);

echo $encodedString;

$decodedString = convert_uudecode($encodedString);

echo $decodedString;
?>