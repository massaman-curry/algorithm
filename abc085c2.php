<?php

fscanf(STDIN, "%d %d", $n, $y);

$com = [];
$ans = [-1, -1, -1];
//x, y, z(10000. 5000, 1000)

function sum($com){
    global $n;
    global $y;
    if((array_sum($com) == $n) && (10000 * $com[0] + 5000 * $com[1] + 1000 * $com[2] == $y)){
        foreach($com as $v) echo $v . ' ';
        exit;
    }
}

function dfs($pos){
    global $com;
    global $n;

    if($pos == 3){
        sum($com);
        return;
    };

    for($i = 0; $i <= $n; $i++){
        $com[$pos] = $i;
        dfs($pos + 1);
    }
}

dfs(0);
echo -1, ' ', -1, ' ', -1;