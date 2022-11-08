<?php
//Write a PHP program to merge (by index) the following two arrays.
//Sample arrays :
//$array1 = [[77, 87], [23, 45]];
//$array2 = ["w3resource", "com"];
//Expected Output :
//Array
//(
//[0] => Array
//(
//[0] => w3resource
//[1] => 77
//[2] => 87
//)
//[1] => Array
//(
//[0] => com
//[1] => 23
//[2] => 45
//)
//)

function my_merge($arr1, $arr2)
{
    $result = array();
    if (is_scalar($arr2))
        $result[] = $arr2;
    else
        $result[] = $arr1;
    foreach ($arr2 as $key => $value)
        $result[] = $value;
    return $result;
}
$array1 = [[77, 87], [23, 45]];
$array2 = ["w3resource", "com"];
echo "<pre>";
print_r(array_map("my_merge", $array2, $array1));
