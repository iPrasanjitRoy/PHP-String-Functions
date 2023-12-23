<?php
$stringToHash = 'Hello, World!';
$md5Hash = md5($stringToHash);

echo $md5Hash;


$password = 'user_password';
$salt = 'random_salt_string';

$hashedPassword = md5($password . $salt);

echo $hashedPassword;

/*------- If Condition MD5 Function Example------- */

$storedHash = "5d41402abc4b2a76b9719d911017c592";
$userInputPassword = "hello";

$userInputHash = md5($userInputPassword);

if ($userInputHash === $storedHash) {
    echo "Password Matches!";
} else {
    echo "Password Does Not Match.";
}


$originalPassword = "Hello";
$hashedPassword = password_hash($originalPassword, PASSWORD_BCRYPT);
$userInputPassword = "Hello";

if (password_verify($userInputPassword, $hashedPassword)) {
    echo "Password Matches!";
} else {
    echo "Password Does Not Match.";
}


?>