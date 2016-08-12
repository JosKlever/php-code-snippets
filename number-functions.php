<?php

function sum_of_digits($number) {
    if ( !is_int($number) ) {
        return 0;
    } else {
        return array_sum(array_map('intval', str_split($number)));
    }
}

?>
