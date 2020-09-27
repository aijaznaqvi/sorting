<?php

$a=['my','name','is','john','doe'];

bubble_sort($a);

echo 'The first element in alphabetical order for the given array of strings is = '.$a[0] . PHP_EOL;

function bubble_sort(&$arr) {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k][0] < $arr[$j][0]) {
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}