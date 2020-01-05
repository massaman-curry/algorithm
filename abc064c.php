<?php

$n = fgets(STDIN);
$input = explode(" ", fgets(STDIN));

// $colour = ['灰色', '茶色', '緑色', '水色', '青色', '黄色', '橙色', '赤色'];
$cntr = array_fill(0, 12, 0);
$rslt = 0;

foreach($input as $v){
    $cntr[intval(floor((int)$v / 400))] += 1;
}

// var_dump($cntr);

for($i = 0; $i < 8; $i++) if($cntr[$i] > 0) $rslt += 1;

for($i = 8; $i < 11; $i++) $cntr[11] += $cntr[$i];

echo $rslt, " ", $rslt + $cntr[11];

