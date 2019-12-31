<?php

// 3 4
// 1 1
// 2 2
// 3 3

// $n = 3;
// $k = 4;
fscanf(STDIN, "%d %d", $n, $k);
$array = [];

for($i = 0; $i < $n; $i++){

    fscanf(STDIN, "%d %d", $a, $b);

    for($j = 0; $j < $b; $j++) $array[] = $a;

}

usort($array, function($a, $b){
    return $a <=> $b;
});

// var_dump($array);

print $array[$k -1];