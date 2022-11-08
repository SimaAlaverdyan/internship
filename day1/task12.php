<?php
//Write a PHP function to change the following array's all values to upper or lower case.
//Sample arrays :
//$Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];
//Expected Output :
//Values are in lower case.
//Array ( [A] => blue [B] => green [c] => red )
//Values are in upper case.
//Array ( [A] => BLUE [B] => GREEN [c] => RED )

$Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];

echo "Values are in lower case. <br>";
foreach ($Color as $key => $value)
    $Color[$key] = strtolower($value);
print_r($Color);

echo "<br> Values are in upper case. <br>";
foreach ($Color as $key => $value)
    $Color[$key] = strtoupper($value);
print_r($Color);
