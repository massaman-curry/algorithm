<?php
// 5
// CHOKUDAI
// RNG
// MAKOTO
// AOKI
// RINGO
// list($M, $A, $R, $C, $H) = [0, 0, 0, 0, 0];
$cnt = ['M' => 0, 'A' => 0, 'R' => 0, 'C' => 0, 'H' => 0];
$c_size = 0;
$mltpl = 1;
$nd = 0;
$dup = 0;
$ans = 0;

// $in = [];
fscanf(STDIN, "%d", $n);
for($i = 0; $i < $n; $i++){
    $ini = substr(fgets(STDIN), 0, 1);
    if(array_key_exists($ini, $cnt)) $cnt[$ini]++;
}
foreach($cnt as $v){
    if($v > 0){
        $c_size++;
        $mltpl *= $v;
    }
    if($v == 1) $nd++;
}
//もしかしたらここで$c_sizeの確認をした方が良いかも、$c_sizeが3より大きいか
$base = ($c_size * ($c_size - 1) * ($c_size - 2)) / 6;
//もしかしたらここで$ndの確認をした方が良いかも、$ndが3より大きいか
$dup = ($nd * ($nd - 1) * ($nd -2)) / 6;
$ans = $mltpl * $base - $dup;


// echo $mltpl;
// var_dump($cnt);
// foreach($cnt as $v){
//     if($v > 0) $c_size++;
// }
// array_count_values($in)
// var_dump($cnt);

// echo $M, $A, $R, $C, $H;
