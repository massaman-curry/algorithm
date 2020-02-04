<?php

$dp = [];
$dp[0] = 0;

for($n = 1; $n <= 100000; $n++){
    $dp[$n] = PHP_INT_MAX;
    $power = 1;
    while($power <= $n){
        $dp[$n] = min($dp[$n], $dp[$n - $power] + 1);
        $power *= 6;
        //1 + $dp[$n - 6], 1 + $dp[$n - 36]...
    }
    $power = 1;
    while($power <= $n){
        $dp[$n] = min($dp[$n], $dp[$n - $power] + 1);
        $power *= 9;
    }
}

fscanf(STDIN, "%d", $N);
echo $dp[$N];
