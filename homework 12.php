<?php
// Таблицы истинности
echo (0 . ' && ' . 0 . ' = ' . (int)(0&&0)) . '<br>' ;
echo (0 . ' && ' . 1 . ' = ' . (int)(0&&1)) . '<br>' ;
echo (1 . ' && ' . 0 . ' = ' . (int)(1&&0)) . '<br>' ;
echo (1 . ' && ' . 1 . ' = ' . (int)(1&&1)) . '<br>' ;

echo (0 . ' || ' . 0 . ' = ' . (int)(0||0)) . '<br>' ;
echo (0 . ' || ' . 1 . ' = ' . (int)(0||1)) . '<br>' ;
echo (1 . ' || ' . 0 . ' = ' . (int)(1||0)) . '<br>' ;
echo (1 . ' || ' . 1 . ' = ' . (int)(1||1)) . '<br>' ;

echo (0 . ' xor ' . 0 . ' = ' . (int)(0 xor 0)) . '<br>' ;
echo (0 . ' xor ' . 1 . ' = ' . (int)(0 xor 1)) . '<br>' ;
echo (1 . ' xor ' . 0 . ' = ' . (int)(1 xor 0)) . '<br>' ;
echo (1 . ' xor ' . 1 . ' = ' . (int)(1 xor 1)) . '<br>' ;

// Квадратное уравнение
$str = '+10*x^2+30*x+20=0';
function D($a, $b, $c) {
    return ($b**2)-(4*$a*$c);
}
assert (1 === sum(1,0));
assert (1 === sum(0,1));
assert (22 === sum(11,11));

preg_match_all("/[-,+]\s*\d*/",$str,$arr, PREG_OFFSET_CAPTURE);
$arr = $arr[0];
//var_dump($arr);

$D = D($arr[0][0], $arr[1][0], $arr[2][0]);
echo $D . '<br>';

function x1($a, $b, $D) {
    return ((-$b+$D**(1/2))/(2*$a));
}
assert (1 === sum(1,0));
assert (1 === sum(0,1));
assert (22 === sum(11,11));

function x2($a, $b, $D) {
    return ((-$b-$D**(1/2))/(2*$a));
}
assert (1 === sum(1,0));
assert (1 === sum(0,1));
assert (22 === sum(11,11));

$x1 = x1($arr[0][0], $arr[1][0], $D);
$x2 = x2($arr[0][0], $arr[1][0], $D);
echo $x1. '<br>',$x2. '<br>';

//
