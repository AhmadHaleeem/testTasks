<?php

/*
 * Fourth Task
 */

$numbers = [3, 6, 7, 1, 9, 4, 3, 2];

function my_comparison($a, $b, $order = 'ASC')
{
    if ($order == 'ASC') {
        return $a <=> $b;
    } elseif ($order == 'DESC') {
        return $b <=> $a;
    }
}

usort($numbers, "my_comparison");

print_r($numbers);


