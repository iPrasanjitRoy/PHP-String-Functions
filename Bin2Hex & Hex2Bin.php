<?php
$binaryData = "Hello, World!";
$hexRepresentation = bin2hex($binaryData);

echo $hexRepresentation;

$binaryData = hex2bin($hexRepresentation);

echo $binaryData;
?>