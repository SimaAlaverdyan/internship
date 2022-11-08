<?php
//Write a PHP script to check whether a string contains a specific string?
//Sample string : 'The quick brown fox jumps over the lazy dog.'

$str = 'The quick brown fox jumps over the lazy dog.';
$spec_str = 'fox';
if (strpos($str, $spec_str))
    echo "ok\n";
else
    echo "ko\n";
