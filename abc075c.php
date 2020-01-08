<?php


// 7 7
// 1 3
// 2 7
// 3 4
// 4 5
// 4 6
// 5 6
// 6 7

fscanf(STDIN, "%d %d", $n, $m);

// for($i = 1; $i <= $n; $i++) $vis[$i] = false;

for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= $n; $j++){
        $graph[$i][$j] = false;
    }
}

while($m--){
    fscanf(STDIN, "%d %d", $bw, $fw);
    $graph[$bw][$fw] = $graph[$fw][$bw] = true;
}

function dfs($a){
    global $vis;

    if($vis[$a]) return;
    $vis[$a] = true;
    for($i = 0; $i < $n; $i++){
        if($graph[$a][$i]) dfs($i);
    }
}

for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= $n; $j++){
        if($graph[$i][$j]) $graph[$i][$j] = $graph[$j][$i] = false;
        for($k = 1; $k <= $n; $k++) $vis[$k] = false;
        dfs(1);
        if(in_array(false, $vis, true)) $ans++;
        // if($bridge) $answer++;
    }
    // for($j = 1; $j <= $n; $j++){
    //     if($graph[$i][$j]) $graph[$i][$j] = $graph[$j][$i] = false;
    //     for($j = 1; $j <= $n; $j++) $vis[$j] = false;
    //     dfs(1);
    // }

}






// var_dump($graph);

// for($i = 0; $i < $n; $i++){

// }
// var_dump($adjlst);






