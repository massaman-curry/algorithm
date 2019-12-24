<?php

// 7 7
// 1 3
// 2 7
// 3 4
// 4 5
// 4 6
// 5 6
// 6 7

// $adj_list = [[1, 3], [2, 7], [3, 4], [4, 5], [4, 6], [5, 6], [6, 7]];
$adj_list = [[1, 2], [2, 3], [1, 3]];
$cnt = 0;
$n = 7;
$m = 7;

$checked = [];
// $dist = array_fill(1, $n, FALSE);
// $checked[] = 1;

function dnf($v, $checked){

    global $adj_list;
    global $n;
    global $cnt;
    $nxt = []; //隣接値

//$nxtの値が、checkedに無いか、確認。
    if(in_array($v, $checked)) return $cnt;
//$checked[]に$vを挿入。
    $checked[] = $v;
// $checkedの値が$nと同値になったら（全頂点を回ったら）、カウンターを1進める。何通りか調べる
    if(count($checked) == $n) $cnt++;
// $vを$adj_listから探して、その値を$nxt_queに。
    foreach($adj_list as $adj){
        if(in_array($v, $adj)){
            $k = 1 - (array_search($v, $adj));
            if(!in_array($adj[$k], $checked))$nxt[] = $adj[$k];
        }
    }
//$nxt_queの1つずつ取得してループ。
    // $nv = array_shift($next_que);
    foreach($nxt as $nv) dnf($nv, $checked);


}

dnf(1, $checked);
print $cnt;


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