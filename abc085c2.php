<?php

fscanf(STDIN, "%d %d", $n, $y);

$com = [];
//x, y, z(10000. 5000, 1000)

function dfs($pos){
    global $com;
    global $n;
    if($pos == 3) return $com;
    for($i = 0; $i <= $n; $i++){
        $com[$pos] = $i;
        print_r($com);
        dfs($pos + 1);
    }
}

dfs(0);