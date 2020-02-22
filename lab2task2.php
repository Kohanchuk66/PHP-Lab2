<?php 
    $isSimetric = true;
    $n = 3;

    for( $i = 0; $i < $n; $i++ ){
        $arr[$i][0] = $i;

        for( $j = 0; $j < $n; $j++ ){
            $arr[$i][$j] =  $i + 1;
        }

    }

    for( $i = 0; $i < $n; $i++ ){

        for( $j = 0; $j < $n; $j++ ){
            if( $arr[$i][$j] != $arr[$n - $i -1][$n - $j - 1] ){
                $isSimetric = false;
            }
        }

    }

    if( $isSimetric ){
        echo " Симетричний ";
    }
    else{
        echo " Не симетричний ";
    }
?>