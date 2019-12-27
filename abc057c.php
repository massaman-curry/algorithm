<?php

$n = trim(fgets(STDIN));
$nsize = strlen(floor(sqrt($n)));
$rslt = strlen($n);
// $div_min = strlen($n);

// $n = 1000;

for($i = 1; $i <= floor(sqrt($n));  $i++){
    if($n%$i == 0){
        $rslt = strlen($n/$i);
        if($rslt == $nsize) break;
    }
}

print $rslt;

// for($i = ceil(sqrt($n)); $i <= $n; $i++){
//     if($n%$i == 0) { print strlen($i) ."\n"; break;}
// }

// foreach(range(1, sqrt($n)) as $v){
//     $v
// }

// for($i = 1; $i < $n/2; $i++){
//     // if($n % $i == 0 && $len = strlen(max($i, $n/$i)) < $div_min) $div_min = $len;
//     if($n % $i == 0){
//         $len = strlen(max($i, $n/$i));
//         $div_min = $len < $div_min ? $len : $div_min;
//     }

// }

// print $div_min;

