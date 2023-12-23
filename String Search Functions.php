<?php

$str = "Hello World. The World Is Nice";

/*-----Find The First Occurrence Of "World" In $str (Case-Sensitive)--------*/
$newstr = strstr($str, "World");

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-----Find And Return The Part Of The String Before The First Occurrence Of "World"-----*/
$newstr = strstr($str, "World", true);

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------Case-Sensitive Search For "WORLD"----*/
$newstr = strstr($str, "WORLD");

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*---------Case-Insensitive Search For "WORLD"---------*/
$newstr = stristr($str, "WORLD") . "<br>";

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------Find The First Occurrence Of "World" In $str (Same as strstr)------*/
$newstr = strchr($str, "World");

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-----Find And Return The Part Of The String Before The First Occurrence Of "World"----*/
$newstr = strchr($str, "World", true);

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*----Find The Last Occurrence Of "World" In $str (Reverse Order)------*/
$newstr = strrchr($str, "World");

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*----Find The First Occurrence Of Any Character In 'Wo'-------*/
$newstr = strpbrk($str, 'Wo') . "<br>";

echo '<pre>';
print_r($newstr);
echo '</pre>';
?>