<?php
$s = trim(fgets(STDIN));

$s = preg_replace('/eraser/', '', $s);
$s = preg_replace('/erase/', '', $s);
$s = preg_replace('/dreamer/', '', $s);
$s = preg_replace('/dream/', '', $s);

print $s == '' ? 'YES' : 'NO';





/*
$s = 'dreamerasedreamererase';
$ptn_list = ['dreamer', 'dream', 'eraser', 'erase'];
$ptn = 'dream';

for($i = 0; $i <4 ; $i++){
    

}
// preg_match()


$s = 'erasedreamer';
$ptn_list = ['dream', 'dreamer', 'erase', 'eraser'];
$op = 'NO';

for($i = 0; $i < 4; $i++){

    if(preg_match('/^' .$ptn_list[$i] .'/', $s) == 1){
        
        $len = strlen($ptn_list[$i]);
        $tgt = substr($s, $len);

        $op = in_array($tgt, $ptn_list) ? 'YES' : 'NO';

    }

}

print $op;

*/