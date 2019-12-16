<?php

$n = fgets(STDIN);
$num = explode(" ", trim(fgets(STDIN)));
$alice = $bob = 0;


// $n = 4;
// $num = [20, 18, 2, 18];

usort($num, function($a, $b){
    return $b <=> $a;
});

foreach($num as $key => $value){
    $key % 2 == 0 ? $alice += $num[$key] : $bob += $num[$key];
}

print($alice - $bob);