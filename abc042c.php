<?php

// 1000 8
// 1 3 4 5 6 7 8 9
// $n = 9999;
// $n_array = str_split(1000);
// $input = [1, 3, 4, 5, 6, 7, 8, 9];
// $input = [0];
fscanf(STDIN, "%d %d", $n, $k);
$list = explode(" ", trim(fgets(STDIN)));

// var_dump($list);
// var_dump($input);
// $fav = array_diff(range(0, 9), $input);
// $fav = array_merge($fav);

// var_dump($fav);

// gettype($fav[0]);

// 8000 を 7だけなら、77777
// 9999を1だけなら、11111

for($i = $n; $i <= 100000; $i++){

    $na = str_split($i);
    $cnt = 0;

    foreach($na as $value){

        if(in_array($value, $list)){
            continue 2;
        };

        $cnt += 1;

        if($cnt == count($na)){
            print($i);
            exit;
        }

    }



    // foreach($fav as $value){
    //     $cnt = in_array($value, $na)? $cnt + 1 : $cnt;
    //     // if(in_array($value, $na)){    var_dump($na);

    //     //     print_r($na);
    //     // }
    // }

    // if($cnt == count($na)){break;}

}
    // print($i);

    // for($j = 0; $j < count($fav); $j++){

        // in_array($fav[$j], )

        // var_dump($na);
        // print $fav[$j];

        // print in_array($fav[$j], $na);

        

        // var_dump($fav);

        // if (in_array($fav[$j], $na)){
        //     // print($i);
        // break;
        // }

        // }



// break;
//     for($j = 0; $j < count($na); $j++){

//         $na[$j]
//     }

//     $na[$j]


    // for($i = $n; $i < 10000; $i++){

//     $na = str_split($i);

//     for($j = 0; $j < count($fav); $j++){

//         if (in_array($fav[$j], $na)){
//             print($i);
//         break;
//         }

//     }


// break;
    // for($j = 0; $j < count($na); $j++){

    //     $na[$j]
    // }

    
// }






// for($i = 0; $i < count($n); $i++){

//     array_filter($like, function($a){
//        return $a >= $input[$i];
//     });



// }

// print_r($n);
// print_r($like);