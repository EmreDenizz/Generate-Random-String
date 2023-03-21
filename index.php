<?php

// Length of the random string
$length = 10;

$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

// Generate random string
$random_string = '';
for ($i = 0; $i < $length; $i++) {
    $index = rand(0, strlen($chars) - 1);
    $random_string .= $chars [$index];
}

// Print random string
var_dump($random_string);

exit;

?>
