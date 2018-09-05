<?php

/*
 * Second Task
 */

function getArray($input = [], $n) {
    $output = array_chunk($input, $n);
    return json_encode($output);
}

print_r(getArray(array(1,2,3,4,5,6,7,8), 3));

