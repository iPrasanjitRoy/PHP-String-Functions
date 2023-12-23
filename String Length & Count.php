<?php
/*-------String Length Function------- */
$str = "Prasanjit Roy";

$newStr = strlen($str);

echo '<pre>';
print_r($newStr);
echo '</pre>';


/* -------- Str_Word_Count -------- */
$newStr = str_word_count($str);

echo '<pre>';
print_r($newStr);
echo '</pre>';



/* -------- Return Array -------- */


$array = str_word_count($str, 1);

echo "<pre>";
print_r($array);
echo "</pre>";



/*-------String Count Function------- */
$count = substr_count("Hello World. The World Is Nice World", "World");

echo "<pre>";
print_r($count);
echo "</pre>";

$count = substr_count("Hello World. The World Is Nice World", "World", 10);

echo "<pre>";
print_r($count);
echo "</pre>";

$count = substr_count("Hello World. The World Is Nice World", "World", 1, 25);

echo "<pre>";
print_r($count);
echo "</pre>";

?>