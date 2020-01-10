<?php

//s =  ?tc????
// t = coder

$s =str_split(fgets(STDIN));
$t = str_split(trim(fgets(STDIN)));
$rslt = 'UNRESTORABLE';
$point = array_keys($s, $t[0]);
// var_dump($point);
foreach($point as $v){
    $cnt = 1;
    for($i = 1; $i <= count($t) -1;  $i++){
        if(@$s[$v + $i] == '?') $cnt++; //$sの文字数が$tの文字数より少ないと、エラーが出るので制御演算子
    }
    $jdge = ($cnt == count($t)) ? $v : false;
}

if(@$jdge){
    array_pop($s);
    for($i = 0; $i < count($t); $i++){
        $s[$jdge + $i] = $t[$i];
    }
    $qmark = array_keys($s, '?');
    foreach($qmark as $v){
        $s[$v] = 'a';
    }
    $rslt = implode($s);
}

echo ($rslt);