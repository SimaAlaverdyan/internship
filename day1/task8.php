<?php
//Write a PHP script to sort the following associative array :
//["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"] in
//a) ascending order sort by value
//b) ascending order sort by Key
//c) descending order sorting by Value
//d) descending order sorting by Key

$arr = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
echo "ascending order sort by value: <br>";
asort($arr);
foreach ($arr as $value => $key) {
    echo $value . " is " . $key . "<br>";
}

$arr = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
echo "<br>" . "ascending order sort by Key: <br>";
ksort($arr);
foreach ($arr as $value => $key) {
    echo $value . " is " . $key . "<br>";
}

$arr = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
echo "<br>" . "descending order sorting by Value : <br>";
arsort($arr);
foreach ($arr as $value => $key) {
    echo $value . " is " . $key . "<br>";
}

$arr = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
echo "<br>" . "descending order sorting by Key : <br>";
krsort($arr);
foreach ($arr as $value => $key) {
    echo $value . " is " . $key . "<br>";
}
