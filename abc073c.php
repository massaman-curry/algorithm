<?php
// 6
// 12
// 22
// 16
// 22
// 18
// 12

fscanf(STDIN, "%d", $n);
$nmbr = [];
$cnt = 0;

// while($n--){
// for($i = 0; $i < $n; $i++){
while($n--){
    fscanf(STDIN, "%d", $v);
    // $nmbr[$v] = $nmbr[$v] ? $nmbr[$v] + 1 : 1;　$nmbr[$v]が存在しないと、phpがundefined offsetエラーを吐くので、だめ
    $nmbr[$v] = array_key_exists($v, $nmbr) ? ++$nmbr[$v] : 1;
}

// var_dump($nmbr);

foreach($nmbr as $v) $cnt = $v % 2 ? ++$cnt : $cnt;

print $cnt;