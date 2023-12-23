<?php
/*-------String:Compare Function------- */
$str1 = "apple";
$str2 = "banana";
$result = strcmp($str1, $str2);

if ($result === 0) {
    echo "The Strings Are Equal";
} elseif ($result < 0) {
    echo "$str1 Is Less Than $str2.";
} else {
    echo "$str1 Is Greater Than $str2.";
}

/*-----CASE-INSENSITIVE--------*/
$str1 = "apple";
$str2 = "Banana";
$result = strcasecmp($str1, $str2);

if ($result === 0) {
    echo "The Strings Are Equal";
} elseif ($result < 0) {
    echo "$str1 Is Less Than $str2.";
} else {
    echo "$str1 Is Greater Than $str2.";
}

/*-----Compares The First N Characters Of Two Strings------*/
$str1 = "apple";
$str2 = "appricot";
$result = strncmp($str1, $str2, 3);

if ($result === 0) {
    echo "The First 3 Characters Are Equal";
} elseif ($result < 0) {
    echo "$str1 Is Less Than $str2.";
} else {
    echo "$str1 Is Greater Than $str2.";
}

/*----Sub String-----*/
$mainString = "Hello, world!";
$subString = "world";
$offset = 7;

$result = substr_compare($mainString, $subString, $offset);

if ($result === 0) {
    echo "The Substring Is Equal To The Portion Of The Main String Starting From Offset $offset.";
} elseif ($result < 0) {
    echo "The Substring Is Less Than The Portion Of The Main String Starting From Offset $offset.";
} else {
    echo "The Substring Is Greater Than The Portion Of The Main String Starting From Offset $offset.";
}

/*------Similar Text---------*/
$string1 = "Hello, world!";
$string2 = "Hallo, world!";

$result = similar_text($string1, $string2, $percent);

echo "Similarity: $result Characters Match.\n";
echo "Similarity Percentage: $percent%";

?>