<?php
function check_plaindrome($string) {
    //remove all spaces
    $string = str_replace(' ', '', $string);

    //remove special characters
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

    //change case to lower
    $string = strtolower($string);

    //reverse the string
    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "<p>It is Palindrome</p>";
    } 
    else {
        echo "</p>Not Palindrome</p>";
    }
}

$string = "A man, a plan, a canal, Panama";
check_plaindrome($string);