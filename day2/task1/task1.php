<?php
//Ստեղծել կամայական չափի զանգված, որի  տարրերը random ձևով գեներացված
//1-100 միջակայքում ընկած ամբողջ տիպի թվեր են.  Տպել էկրանին զանգվածը: Զանգվածից հեռացնել կրկնվող տարրերը: Դասավորել ըստ նվազման և տպել էկրանին 2 սյունակից կազմված աղյուսակի տեսքով
// ( հերթական համար , զանգվածի տարր).
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table tr td{
            border: 1px solid;
        }
        table {
            width: 20%;
            border-collapse: collapse;
        }
        tr {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $arr = [100];
    $j = 1;
    for ($i = 0; $i < 10; $i++)
        $arr[$i] = rand(1, 100);
    echo "<table>";
    foreach ($arr as $key => $value) {
        echo "<tr>";
        echo "<td>$j</td>";
        echo "<td>$value</td>";
        echo "</tr>";
        $j++;
    }
    echo "</table>";
    ?>
</body>
</html>
