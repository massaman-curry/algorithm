<?php

$n = fgets(STDIN);
$input = explode(" ", fgets(STDIN));

// $colour = ['灰色', '茶色', '緑色', '水色', '青色', '黄色', '橙色', '赤色'];
$cntr = array_fill(0, 13, 0);
$rslt = 0;
$max = 0;

foreach($input as $v){
    $cntr[intval(floor((int)$v / 400))] += 1;
}

// var_dump($cntr);

for($i = 0; $i < 8; $i++) if($cntr[$i] > 0) $rslt += 1;

for($i = 8; $i < 12; $i++) $cntr[12] += $cntr[$i];

$max = ($rslt + $cntr[12]) > 8 ? 8 : $rslt + $cntr[12];

// $max = $rslt + $cntr[12];

// if($rslt + $cntr[12] > 8) $max

echo $rslt, " ", $max;

