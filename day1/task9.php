<?php
//Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
//Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62,
// 62, 65, 64, 68, 73, 75, 79, 73
//Expected Output :
//Average Temperature is : 70.6
//List of seven lowest temperatures : 60, 62, 63, 63, 64,
//List of seven highest temperatures : 76, 78, 79, 81, 85,



$temp_arr = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum = 0;

foreach ($temp_arr as $t)
    $sum += $t;
echo "Average Temperature is : " . array_sum($temp_arr) / count($temp_arr);

sort($temp_arr);
echo "<br> List of seven lowest temperatures : ";
for ($i = 0; $i < 7; $i++)
    echo $temp_arr[$i] . " ";

echo "<br> List of seven highest temperatures : ";
for ($i = count($temp_arr) - 7; $i < count($temp_arr); $i++)
    echo $temp_arr[$i] . " ";
