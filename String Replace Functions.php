<?php
/*---------Replaces All Occurrences Of A Search String With Another String--------*/
$originalString = "Hello, World! And Hello, World!";
$newString = str_replace("World", "Universe", $originalString);
echo $newString;

/*-------Case-Insensitive Version Of Str_replace()-----*/
$newString1 = str_ireplace("WORLD", "Universe", $originalString);
echo $newString1;

/*----------Replaces Multiple Occurrences With Different Replacement Strings-----*/
$originalString = "The Quick Brown Fox Jumps Over The Lazy Dog.";
$search = array("Quick", "Brown", "Fox", "Dog");
$replace = array("Slow", "Black", "Cat", "Frog");
$newString = str_replace($search, $replace, $originalString);
echo $newString;


/*-----------------Replaces A Portion Of A String With Another String----------*/
$originalString = "Hello, World! And Hello, World!";
$newString = substr_replace($originalString, "Universe", 7, 5);
echo $newString;

?>