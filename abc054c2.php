<?php

$adj_list = [[1, 2], [2, 3], [1, 3]];
$n = 3;
$m = 3;

$checked = [];
$cnt = 0;

function dnf($v, $checked, $cnt){

    global $adj_list;
    global $n;
    $end = true;
    $nv_lst = [];

    $end = count($checked) == $n ? true : false;

    if($end) return;

    $checked[] = $v;

    foreach($adj_list as $adj){
        if(!in_array($v, $adj)) continue;
        $k = 1 - (array_search($v, $adj));
        $nv_lst[] = $adj[$k];
    }

    foreach($nv_lst as $nv){
        if(in_array($nv, $checked))continue;
        dfs($nv, $checked, $cnt);
    }

}