<?php
/*-------String Split Function------- */
$str = "Prasanjit Roy";

$array = str_split($str);

echo "<pre>";
print_r($array);
echo "</pre>";

/*-------String Split Length------- */

$array2 = str_split($str, 3);

echo "<pre>";
print_r($array2);
echo "</pre>";

/*-------String Chunk Function------- */


$newStr = chunk_split($str, 1, ".");
echo $newStr . '<br><br>';

?>