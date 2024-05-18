<?php

// Function to count vowels in a string
function countVowels($str) {
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $count = 0;
    foreach (str_split($str) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Function to reverse a string
function reverseString($str) {
    return strrev($str);
}

// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Iterate over each string
foreach ($strings as $str) {
    // Count vowels
    $vowelCount = countVowels($str);
    // Reverse string
    $reversedStr = reverseString($str);
    // Print original string, vowel count, and reversed string
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
}

?>
