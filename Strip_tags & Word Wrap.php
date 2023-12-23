<?php
/*-------Strip_tags Function------- */
$str = "Hello <b>World</b>, Hello <i>Earth</i>";

$newstr = strip_tags($str);

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------Remove Tag------- */
$newstr = strip_tags($str, "<b>");

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------Word Wrap Function------- */
$longString = "THIS IS A VERY LONG STRING THAT NEEDS TO BE WRAPPED TO FIT WITHIN A CERTAIN WIDTH";
$wrappedString = wordwrap($longString, 30, "<br>");

echo '<pre>';
print_r($wrappedString);
echo '</pre>';

?>