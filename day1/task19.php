<?php
//Write a PHP script to find the first character that is different between two strings.
//String1 : 'football'
//String2 : 'footboll'
//Expected Result : First difference between two strings at position 5: "a" vs "o"

$str1 = 'football';
$str2 = 'footboll';
$index = strspn($str1 ^ $str2, "\0");
echo "First difference between two strings at position $index: $str1[$index] vs $str2[$index]";
