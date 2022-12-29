<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
var_dump(2 * 2); // int 4
var_dump(3 / 1); // int 3
var_dump(1 / 3); // float 0.3333
var_dump('20cats' + 40); // int 60
var_dump(18 % 4 ); // int 2

echo ($a = 2); // 2 является значением выражения присваивания
print "\n";
$x = ($y = 12) - 8;
echo $x; // 4 является значением выражения присваивания
print "\n";

var_dump(1 == 1.0); // true
var_dump(1 === 1.0); // false
var_dump('02' == 2); // true
var_dump('02' === 2); // false
var_dump('02' == '2'); // true

$x = (true xor true);
var_dump($x); // true
?>
</body>
</html>