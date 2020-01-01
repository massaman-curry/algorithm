<?php

// 3 4
// 1 1
// 2 2
// 3 3

// $n = 3;
// $k = 4;

fscanf(STDIN, "%d %d", $n, $k);
$array = [];
$cnt = 0;

for($i = 0; $i < $n; $i++){
    fscanf(STDIN,  "%d %d", $a, $b);
    $array[$a] += $b;
}

usort($array, function($a, $b){
    return $a <=> $b;
});

while(true){
    $sum = 0;
    foreach($array as $key => $value){
        $sum += $value;
    }

    if($sum >= $k){}

    //ここで、$arrayから$key => $valueを取り出して、$kを超えるまで$valueを足し、超えた瞬間の$keyを取出したい
}

// foreach($array as $key => $value){
//     for($i = 0; $i < $k;){

//     }
// }

// while(count($array) < $k){
//     fscanf(STDIN, "%d %d", $a, $b);
//     for($i = 0; $i < $b; $i++) $array[] = $a;
//     $cnt++;
// }

// usort($array, function($a, $b){
//     return $a <=> $b;
// });

// for($i = 0; $i < $n - $cnt; $i++){
//     fscanf(STDIN, "%d %d", $a, $b);
//     if($a <= $array[$k -1]) continue;
//     for($i = 0; $i < $b; $i++) $array[] = $a;
// }

// print $array[$k];



// fscanf(STDIN, "%d %d", $n, $k);
// $array = [];

// for($i = 0; $i < $n; $i++){

//     fscanf(STDIN, "%d %d", $a, $b);

//     for($j = 0; $j < $b; $j++) $array[] = $a;

// }

// usort($array, function($a, $b){
//     return $a <=> $b;
// });

// // var_dump($array);

// print $array[$k -1];