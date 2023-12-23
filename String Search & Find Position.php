<?php
// Case-Sensitive Search 
$string = "Hello, world!";
$stringx = "world";

$position = strpos($string, $stringx);

if ($position !== false) {
    echo "The Needle '$stringx' Was Found At Position $position in the String.";
} else {
    echo "The Needle '$stringx' Was Not Found In The String.";
}

// Case-Insensitive Search 
$string = "Hello, world!";
$stringx = "WORLD";

$position = stripos($string, $stringx);

if ($position !== false) {
    echo "The Needle '$stringx' (Case-Insensitive) Was Found At Position $position In The String.";
} else {
    echo "The Needle '$stringx' (Case-Insensitive) Was Not Found In The String.";
}
?>