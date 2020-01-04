<?php

// 3 3
// 1 2
// 1 3
// 2 3

// $n = 3;
// $m = 3;
// $adj_lst = [1 => [2, 3], 2 => [1, 3], 3 => [1, 2]];

fscanf(STDIN, "%d %d", $n, $m);

$adj_lst = [];

for($i = 0; $i < $m; $i++){
    fscanf(STDIN, "%d %d", $fomr, $nxt);
    $adj_lst[$fomr][] = $nxt;
    $adj_lst[$nxt][] = $fomr;
}

// print $adj_lst[1][0];

function dfs($p, $visited){

    global $n;
    global $adj_lst;
    $visited[] = $p;

    if(count($visited) == $n) return 1;

    $sum = 0;

    foreach($adj_lst[$p] as $v){
        if(!in_array($v, $visited)) $sum += dfs($v, $visited);
    }

    return $sum;
    //ここがreturnでなくてprintだと、毎回出力するだけになる。毎回foreachから実行されるdfsの条件count($visited) == $nに合わないときに、
    //本来ならば出力をしてはいけない。printだと出力してしまう。returnによって0をforeachの実行元に返すだけにとどめておかないとだめ。

}

print dfs(1, []);
