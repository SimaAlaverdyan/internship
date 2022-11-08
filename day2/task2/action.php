<?php
//Ստեղծել 2 զանգված: 1-ին զանգվածի տարրերը այբուբենի փոքրատառ և մեծատառ
//[a-z] և [A-Z] տառերն են, երկրորդ զանգվածը 0-9 թվերը:
//Ստեղծել form հետևյալ տեսքով.
//
//Գեներացնել սեղմելուց հետո ստեղծել  նշված քանակի սիմվոլներով և նշված պարամետրերով տող , օգտագործելով եղած երկու զանգվածները և տպել էկրանին:
//Ստացված տողից առանձնացնել տառերը և թվերը ու տպել էկրանին:
//     (Առաջադրանքը կատարելիս գրել ֆունկցիաներ, որոնք կընդունեն անհրաժեշտ
//    պարամետրեր, և կկատարեն անհրաժեշտ գործողություններ):

function checkOption ($opt, $arr1, $arr2, $len)
{
    if ($opt == "digits")
        $res = generateDigits($arr2, $len);
    else if ($opt == "characters")
        $res = generateChars($arr1, $len);
    else
        $res = generateBoth($arr1, $arr2, $len);
    return $res;
}

function generateDigits($arr2, $len)
{
    $res = [];
    for ($i = 0; $i < $len; $i++)
        $res[$i] = array_rand($arr2);
    echo "<pre>";
    print_r($res);
    return $res;
}

function generateChars($arr1, $len)
{
    $res = [];
    shuffle($arr1);
    for ($i = 0; $i < $len; $i++)
        $res[$i] = $arr1[$i];
    echo "<pre>";
    print_r($res);
    return $res;
}

function generateBoth($arr1, $arr2, $len)
{
    $res = [];
    $newArr = array_merge($arr1, $arr2);
    shuffle($newArr);
    for ($i = 0; $i < $len; $i++)
        $res[$i] = $newArr[$i];
    echo "<pre>";
    print_r($res);
    return $res;
}

function selectDigitsChars($arr)
{
    $dig = [];
    $char = [];
    foreach ($arr as $key) {
        if (is_numeric($key))
            array_push($dig, $key);
        else
            array_push($char, $key);
    }
    echo "<br>Digits: <pre>";
    print_r($dig);
    echo "<br>Characters: <pre>";
    print_r($char);
}

$arr1 = array_merge(range('a', 'z'), range('A', 'Z'));
$arr2 = range(1, 9);
$len = $_POST['length'];
$option = $_POST['options'];
$res = [];
if (isset($_POST['btn']))
    $res = checkOption($option, $arr1, $arr2, $len);
selectDigitsChars($res);
