<?php
// 4
// 12 13 1
// 44 17 17
// 66 4096 64
$in = [];
fscanf(STDIN, "%d", $n);
for($i = 0; $i < $n - 1; $i++){
    $in[] = array_map('intval', explode(' ', fgets(STDIN)));
}

// var_dump($in);

for($i = 0; $i < $n; $i++){
    $sum = 0;
    for($j = $i; $j < $n-1; $j++){
        if($sum < $in[$j][1]) $sum = $in[$j][1];
        elseif($sum % $in[$j][2] == 0) ;
        else $sum = $sum + $in[$j][2] - $sum % $in[$j][2];
        $sum += $in[$j][0];
    }
    echo $sum ."\n";
}
// echo 0;

// $sum = max($sum + $in[$j][0], $in[$j + 1][1]);
// $sum += ($sum - $in[$j + 1][1]) % $in[$j + 1][2];
//$in[3][1]がないことが問題
//$in[3] = [0, 0, 0];とするのもあり

// if($sum + $in[$j][0] > $in[$j+1][1]){
//     $sum += $in[$j][0];
//     $sum += ($sum - $in[$j][1]) % $in[$j][2];
//     continue;
// }
// $sum = $in[$j+1][1];

        // if($sum < $in[$n-2][1]){
        //     $sum = $in[$n-2][0] + $in[$n-2][1];
        //     continue;
        // }