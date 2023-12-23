<?php
/*-------CONVERTS A STRING TO LOWERCASE------- */
$str = "Prasanjit Roy";

$newStr = strtolower($str);

echo $newStr;
echo '<br><br>';

/*-------CONVERTS A STRING TO UPPERCASE------- */

$newStr1 = strtoupper($str);

echo $newStr1;
echo '<br><br>';

/*-------Convert The First Character Of A String To Lowercase: ------- */

$newStr2 = lcfirst($str);

echo $newStr2;
echo '<br><br>';

/*-------Converts The First Character Of A String To Uppercase------- */

$newStr3 = ucfirst($str);

echo $newStr3;
echo '<br><br>';

/*-------Converts The First Character Of Each Word In A String To Uppercase------- */

$newStr4 = ucwords($str);

echo $newStr4;
echo '<br><br>';

?>