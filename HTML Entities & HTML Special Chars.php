<?php
$originalString = 'This Is A <b>Bold</b> Statement';
$escapedString = htmlspecialchars($originalString);
echo $escapedString;


$decodedString = htmlspecialchars_decode($escapedString);
echo $decodedString;

$originalString = 'This Is A <b>Bold</b> Statement';
$escapedString = htmlentities($originalString);
echo $escapedString;

$decodedString = html_entity_decode($escapedString);
echo $decodedString;
?>