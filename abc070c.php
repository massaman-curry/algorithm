<?php
$n = fgets(STDIN);
for($i = 0; $i < $n; $i++){
    $clock[] = fgets(STDIN);
}
$clock = array_map("intval", $clock);

function gcd($m, $n){
    if($n > $m) list($m, $n) = [$n, $m];
    while($n != 0){
        $tmp = $n;
        $n = $m % $n;
        $m = $tmp;
    }
    return  $m;
}

while(count($clock) > 1){
    $m = array_pop($clock);
    $n = array_pop($clock);
    $clock[] = $m / gcd($m, $n) * $n;
}

print $clock[0];

// var_dump($clock);

// 5
// 2
// 5
// 10
// 1000000000000000000
// 1000000000000000000

// $clock = [2, 5, 10, 1000000000000000000, 1000000000000000000];
// $clock = [5, 4, 3, 2, 1];

// function gcd($m, $n){
//     if($m < $n) list($m, $n) = [$n, $m];
//     while($m % $n != 0){
//         gcd($n, $m % $n);
//     }
//     return $n;
// }

// function gcd($m, $n){
//     if($n > $m) list($m, $n) = [$n, $m];
//     while($n != 0){
//         $tmp = $n;
//         $n = $m % $n;
//         $m = $tmp;
//     }
//     return  $m;
// }

// function gcd($m, $n){
//     echo $m, $n;
//     $tmp = $m % $n;
//     while($tmp != 0){
//         gcd($n, $tmp);
//     }
//     return $n;
// }

// fscanf(STDIN, "%d %d", $a, $b);

// gcd(end($clock)], $clock[count($clock) -2]);

// $clock[count($clock)]

//ここで$clockの最後を取出してgcdの$mに、$clockの最後から2番目を取出してgcdの$nに代入。
//そしてそれをendかarraypopを使って実装。
//その後、配列の最後を捨てて、最後から2番目の位置にgcdの結果を挿入。繰り返し。

// var_dump($clock);

// echo $m, " ", $n, "\n";
// var_dump($clock);

// while(count($clock) > 1){
//     $m = array_pop($clock);
//     $n = array_pop($clock);
//     // print gcd($m, $n);
//     // $lcm = $m * $n / gcd($m, $n);
//     $clock[] = $m / gcd($m, $n) * $n;
//     // echo $lcm;
//     // $clock[] = $lcm;
// }

// print $clock[0];
