<?php
//Write a PHP script to extract the file name from the following string.
//Sample String : 'www.example.com/public_html/index.php'
//Expected Output : 'index.php'

$path = 'www.example.com/public_html/index.php';
$filename = substr(strrchr($path, '/'), 1);
echo $filename;
