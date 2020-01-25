<?php

fscanf(STDIN, "%d", $n);
for($i = 0; $i < $n; $i++){
    $f[] = array_map('intval', explode(' ', fgets(STDIN)));
}
for($i = 0; $i < $n; $i++){
    $p[] = array_map('intval', explode(' ', fgets(STDIN)));
}

// $f = [[1, 1, 1, 1, 1, 0, 0, 0, 0, 0],
//       [0, 0, 0, 0, 0, 1, 1, 1, 1, 1]
// ];
// $p = [[0, -2, -2, -2, -2, -2, -1, -1, -1, -1, -1],
//       [0, -2, -2, -2, -2, -2, -1, -1, -1, -1, -1]
// ];
$a = [];
$ans = -100000000;

function calc(){
    global $ans;
    global $a;
    global $n;
    global $f;
    global $p;
    $r = 0;
    for($i = 0; $i < $n; $i++){
        $cnt = 0;
        for($j = 0; $j < 10; $j++){
            if($f[$i][$j] == 1 && $a[$j] == 1) $cnt++;
        }
        $r += $p[$i][$cnt];
        //この位置に$ans = max~があると、$ansが$i = 1つまりpの1行目のときの0を覚えてしまい、
        //ほんとは$i = 2のときに$maxが更新され、--2のはずなのに、されず、正しい値より高い値になってしまう
    }
    $ans = max($ans, $r);
}

function dfs($pos){
    global $a;
    if($pos == 10){
        if(array_sum($a) == 0) return;
        calc();
        return;
    }
    $a[$pos] = 0; dfs($pos + 1);
    $a[$pos] = 1; dfs($pos + 1);
}

dfs(0);
echo $ans;

//どこかで利益のmax値を出させないといけない

// $r += $p[$i][$cnt];
// $ans = max($ans, $r);

// // 2
// // 1 1 1 1 1 0 0 0 0 0
// // 0 0 0 0 0 1 1 1 1 1
// // 0 -2 -2 -2 -2 -2 -1 -1 -1 -1 -1
// // 0 -2 -2 -2 -2 -2 -1 -1 -1 -1 -1

// // $f = [[1, 1, 1, 1, 1, 0, 0, 0, 0, 0],
// //       [0, 0, 0, 0, 0, 1, 1, 1, 1, 1]
// // ];
// // $p = [[0, -2, -2, -2, -2, -2, -1, -1, -1, -1, -1],
// //       [0, -2, -2, -2, -2, -2, -1, -1, -1, -1, -1]
// // ];

// $f = [];
// $p = [];

// fscanf(STDIN, "%d", $n);
// for($i = 0; $i < $n; $i++){
//     $f[] = array_map('intval', explode(' ', fgets(STDIN)));
// }

// for($i = 0; $i < $n; $i++){
//     $p[] = array_map('intval', explode(' ', fgets(STDIN)));
// }

// // var_dump($f);
// // var_dump($p);

// $sum = [0];

// // echo $p[0][1];
// //下の2は、$nに変える
// for($i = 0; $i < $n; $i++){
//     $cnt = 0;
//     uasort($p[$i], function($b, $a){
//         return $a <=> $b;
//     });
//     // var_dump($p[$i]);
//     foreach($f[$i] as $v){
//         // var_dump($v) ;
//         // if($v == 1) $cnt+= 1;
//         $cnt += $v;
//     }

//     // echo $cnt;

//     // echo $cnt;
//     // $search = array_keys($p[$i], max($p[$i]));
//     // var_dump($search);
//     foreach($p[$i] as $k => $v){
//         if($cnt >= $k && $k != 0) {
//             // echo $p[$i][$k];
//             $sum[$i + 1] = $sum[$i] + $p[$i][$k];
//         break;
//         }
//         // if($f[$i][$k]){$sum += $p[$i][$k]; break;}
//     }
// }

// $sum[0] = null;
// echo max($sum);