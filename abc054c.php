<?php

// 7 7
// 1 3
// 2 7
// 3 4
// 4 5
// 4 6
// 5 6
// 6 7

$adj_list = [[1, 3], [2, 7], [3, 4], [4, 5]. [4, 6], [5, 6], [6, 7]];

$n = 7;
$m = 7;

$checked = [];
// $dist = array_fill(1, $n, FALSE);
// $checked[] = 1;

function dnf($v, $checked){

    global $adj_list;
    $nxt = []; //隣接値

//$nxtの値が、checkedに無いか、確認。
    if(in_array($v, $checked)) return 1;
//$checked[]に$vを挿入。
    $checked[] = $v;
// $vを$adj_listから探して、その値を$nxt_queに。
    foreach($adj_list as $adj){
        if(in_array($v, $adj)){
            $k = 1 - (array_search($v, $adj));
            $nxt[] = $adj[$k];
        }
    }
//$nxt_queの1つずつ取得してループ。
    // $nv = array_shift($next_que);
    foreach($nxt as $nv) dnf($nv, $checked);

}


    // foreach($adj_list as $adj){

    //     if(in_array($v, $adj)){

    //         $k = array_search($v, $adj) == 0 ? 1 : 0;
    //         $nv = $adj[$k];
    //         $array[$v]
    //         // $array[$v][] = $adj[$k];
    //         //$vの隣接値を取得し、$array[]の$v番目に収納
    //         foreach($array[$v] as $nv){

    //             dnf($array[$nv]);

    //         }

    //     }

    // }


// function sth($v){

//     $v;
// }

// in_array(-1, $dist) == 0;