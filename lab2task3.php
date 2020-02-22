
<?php
    $arr = array( 1, 2, 4, 2, 534, 234, 144, 23, 3, 53, 1, 2, 4, 2, 534, 234, 2584, 23, 3, 89, 1, 2, 4, 2, 534 );

    function isFib($d){
        $fibarr = array( 0 , 1 );

        for ($i=0; $i < count( $fibarr ) ; $i++) {
            if( $fibarr[$i] == $d ){
                return 'true';
        }
        elseif ( $fibarr[$i] < $d && $i == count( $fibarr )-1 ) {
            array_push( $fibarr, $fibarr[$i] + $fibarr[$i-1] );
        }
    }

    return false;
    }

    for ($i=0; $i < count($arr); $i++) {
        if (isFib($arr[$i])) {
            echo "$arr[$i] ";
        }

    }
?>
