<?php
function isPalindrome(string $string) {
    $input = strtolower($string);
    for ($i = 0; $i < strlen($input) / 2 ; $i++) {
        if ($input[$i] != $input[strlen($input)-$i-1]) {
            return false;
        }
    }
    return true;
}

print isPalindrome("Radar");