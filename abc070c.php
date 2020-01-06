<?php

// 5
// 2
// 5
// 10
// 1000000000000000000
// 1000000000000000000


// function gcd($m, $n){
//     if($m < $n) list($m, $n) = [$n, $m];
//     while($m % $n != 0){
//         gcd($n, $m % $n);
//     }
//     return $n;
// }

function gcd($m, $n){
    if($n > $m) list($m, $n) = [$n, $m];
    while($n != 0){
        $tmp = $n;
        $n = $m % $n;
        $m = $tmp;
    }
    return  $m;
}

// function gcd($m, $n){
//     echo $m, $n;
//     $tmp = $m % $n;
//     while($tmp != 0){
//         gcd($n, $tmp);
//     }
//     return $n;
// }

// fscanf(STDIN, "%d %d", $a, $b);

echo gcd(72, 42);