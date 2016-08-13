<?php

function sum_of_digits($number) {
    if ( !is_int($number) ) {
        return 0;
    } else {
        return array_sum(array_map('intval', str_split($number)));
    }
}

function isPrime($num) {
    if($num == 1)
        return false;
    if($num == 2)
        return true;
    if($num % 2 == 0) {
        return false;
    }
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }
    return true;
} 
function gcd($a, $b) { 
	return ( $b == 0 ) ? ($a):( gcd($b, $a % $b) ); 
}

?>
