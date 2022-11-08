<?php
//Write a PHP script which decodes the following JSON string.
//Sample JSON code :
//{"Title": "The Cuckoos Calling",
//"Author": "Robert Galbraith",
//"Detail": {
//"Publisher": "Little Brown"
//}}
//Expected Output :
//Title : The Cuckoos Calling
//Author : Robert Galbraith
//Publisher : Little Brown

//$json_arr = '{"Title": "The Cuckoos Calling",
//"Author": "Robert Galbraith",
//"Detail": {
//"Publisher": "Little Brown"
//}}';
//$decoded_json = (json_decode($json_arr, true));
//$decoded_json = (json_decode($decoded_json, true));
//
//foreach ($decoded_json as $key => $value) {
//    echo "$key : $value <br>";
//}


function json_print($value, $key)
{
    echo "$key : $value <br>";
}
$json = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';
$decoded_json = json_decode($json,true);
array_walk_recursive($decoded_json,"json_print");
