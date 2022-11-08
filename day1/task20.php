<?php
// Write a PHP script to remove comma(s) from the following numeric string.
//Sample String : '2,543.12'
//Expected Output : 2543.12

$str = '2,543.12';
$res = str_replace(',', '', $str);
echo $res;
