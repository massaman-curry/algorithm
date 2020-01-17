<?php

//s =  ?tc????
// t = coder

$s = str_split(fgets(STDIN));
$t = str_split(fgets(STDIN));

// $s = ['?', 't', 'c', '?', '?', '?', '?'];
// $t = ['c', 'o', 'd', 'e', 'r'];
$rslt = 0;
$ans = 'UNRESTORABLE';

for($i = 0; $i < count($s) - count($t) +1; $i++){
    $cnt = 0;
    for($j = 0; $j < count($t); $j++){
        // echo $t[$j], $s[$i + $j];
        if($t[$j] != $s[$i + $j]  && $s[$i + $j] != '?'){
            // echo $t[$j], $s[$i + $j];
        break;
        }

        $cnt++;

        // $rslt = true;

        // print "hello";
        // if($t[$j] != $s[$i + $j] && $s[$j] != '?') echo $t[$j], $s[$i+$j];
        // echo $i, $j;
        // echo $s[$i], $t[$j];
        // if($t[$j] != $s[$i+$j] && $s[$i+$j] != '?') {$rslt = false; break;}
    }

    if($cnt == count($t)) $rslt = $i;
}

// echo $rslt;

if($rslt){
    for($i = 0; $i < count($t); $i++){
        $s[$rslt + $i] = $t[$i];
    }
    
    for($i = 0; $i < count($t); $i++){
        if($s[$i] == '?') $s[$i] = "a";
    }

    // var_dump($s);
    // $v = $v == '?' ? 'a' : $v;
    $ans = implode('', $s);
}

print $ans;



// $s =str_split(fgets(STDIN));
// $t = str_split(trim(fgets(STDIN)));
// $rslt = 'UNRESTORABLE';
// $point = array_keys($s, $t[0]);
// // var_dump($point);
// foreach($point as $v){
//     $cnt = 1;
//     for($i = 1; $i <= count($t) -1;  $i++){
//         if(@$s[$v + $i] == '?') $cnt++; //$sの文字数が$tの文字数より少ないと、エラーが出るので制御演算子
//     }
//     $jdge = ($cnt == count($t)) ? $v : false;
// }

// if(@$jdge){
//     array_pop($s);
//     for($i = 0; $i < count($t); $i++){
//         $s[$jdge + $i] = $t[$i];
//     }
//     $qmark = array_keys($s, '?');
//     foreach($qmark as $v){
//         $s[$v] = 'a';
//     }
//     $rslt = implode($s);
// }

// echo ($rslt);