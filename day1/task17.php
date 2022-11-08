<?php
//Write a PHP script to get the last three characters of a string.
//Sample String : 'rayy@example.com'
//Expected Output : 'com'

$str = 'rayy@example.com';
$res = pathinfo($str, PATHINFO_EXTENSION);
echo $res;
