<?php


// 7 7
// 1 3
// 2 7
// 3 4
// 4 5
// 4 6
// 5 6
// 6 7
// for($i = 1; $i <= $n; $i++) $vis[$i] = false;

fscanf(STDIN, "%d %d", $n, $m);

//-----------------------初期化---------------------------
$ans = 0;

for($i = 0; $i < $n; $i++){
    for($j = 0; $j < $n; $j++){
        $graph[$i][$j] = false;
    }
}

function dfs($a){
    global $vis;
    global $n;
    global $graph;

    if($vis[$a]) return;
    $vis[$a] = true;
    for($i = 0; $i < $n; $i++){
        if($graph[$a][$i]) dfs($i);
    }
}

//----------------------------------------------------------------

for($i = 0; $i < $m; $i++){
    fscanf(STDIN, "%d %d", $a[$i], $b[$i]);
    $a[$i]--;
    $b[$i]--;
    $graph[$a[$i]][$b[$i]] = $graph[$b[$i]][$a[$i]] = true;
}

for($i = 0; $i < $m; $i++){
    $graph[$a[$i]][$b[$i]] = $graph[$b[$i]][$a[$i]] = false;
    for($j = 0; $j < $n; $j++) $vis[$j] = false;
    dfs(0);
    if(in_array(false, $vis, true)) $ans++;
    $graph[$a[$i]][$b[$i]] = $graph[$b[$i]][$a[$i]] = true;
        // $graph[$i][$j] = $graph[$j][$i] = ここで、falseにした値をもとに戻したい。
        // if($bridge) $answer++;

    // for($j = 1; $j <= $n; $j++){
    //     if($graph[$i][$j]) $graph[$i][$j] = $graph[$j][$i] = false;
    //     for($j = 1; $j <= $n; $j++) $vis[$j] = false;
    //     dfs(1);
    // }

}

print $ans;






// var_dump($graph);

// for($i = 0; $i < $n; $i++){

// }
// var_dump($adjlst);






