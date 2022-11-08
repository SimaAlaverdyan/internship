<?php
//$color = ['white', 'green', 'red']
//Write a PHP script which will display the colors in the following way :
//Output :
//white, green, red
// . green
// . red
// . white

$color = ['white', 'green', 'red'];
for ($i = 0; $i < 3; $i++)
    echo $color[$i] . " ";
echo "<li>$color[1]</li>";
echo "<li>$color[2]</li>";
echo "<li>$color[0]</li>";
