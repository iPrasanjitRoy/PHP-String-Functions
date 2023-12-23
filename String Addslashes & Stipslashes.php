<?php
/*-------String Addslashes Function------- */
$originalString = "It's a PHP String.";
$escapedString = addslashes($originalString);
echo $escapedString;

/*-------String Slashes Function------- */
$escapedString = "It\'s a PHP string.";
$originalString = stripslashes($escapedString);
echo $originalString;

/*-------String Addcslashes Function------- */
$inputString = "Hello, World!";
$escapedString = addcslashes($inputString, 'W');
echo $escapedString;

/*-------String Stripcslashes Function------- */
$originalString = "Hello, \\World!";
$unescapedString = stripcslashes($originalString);
echo $unescapedString;

?>