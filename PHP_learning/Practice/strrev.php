<?php 

//The strrev() function in PHP is used to reverse a string.

    function isPalindrome($str){
        $reversed = strrev($str);
        return $str === $reversed;

    }
    echo isPalindrome("madam")? "Palindrome": "Not a Palindrome";

?>