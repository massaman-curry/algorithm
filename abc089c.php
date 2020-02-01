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
$other = 0;
$other_com = 0;
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
}
//もしかしたらここで$c_sizeの確認をした方が良いかも、$c_sizeが3より大きいか
$base = ($c_size * ($c_size - 1) * ($c_size - 2)) / 6;
//もしかしたらここで$ndの確認をした方が良いかも、$ndが3より大きいか
$other = $n - $c_size;

// $other_com = ($other * ($other - 1) * ($other - 2)) / 6;
// $nd_com = ($nd * ($nd - 1) * ($nd - 2)) / 6;
if($base){
    $ans = $mltpl * $base - $other_com;
}

echo $ans;


// echo $mltpl;
// var_dump($cnt);
// foreach($cnt as $v){
//     if($v > 0) $c_size++;
// }
// array_count_values($in)
// var_dump($cnt);

// echo $M, $A, $R, $C, $H;
