<?php
//. Write a PHP script that inserts a new item in an array in any position.
//Expected Output :
//Original array :
//1 2 3 4 5
//After inserting '$' the array is :
//1 2 3 $ 4 5

$arr = [1, 2, 3, 4, 5];
echo "Original array : <br>";
foreach ($arr as $a)
    echo $a . " ";

array_splice($arr, 3, 0, "$");

echo "<br> After inserting '$' the array is :<br>";
foreach ($arr as $a)
    echo $a . " ";
