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

    $end = count($checked) == $n ? true : false;

    if($end) ++$cnt; return;

}