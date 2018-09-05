<?php

/*
 * First Task
 */

function getDigits()
{
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo $i . ' FIZZ BUZZ' . '<br>';
        } else if ($i % 3 == 0) {
            echo $i . ' Fizz' . '<br>';
        } else if ($i % 5 == 0) {
            echo $i . ' Buzz' . '<br>';
        }
    }
}

getDigits();

