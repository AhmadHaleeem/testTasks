<?php

/*
 * Third Task
 */

function getDiffDates($firstDate, $secondDate)
{
    $firstDate = strtotime($firstDate);
    $secondDate = strtotime($secondDate);

    for ($week = strtotime('Monday', $firstDate); $week <= $secondDate; $week = strtotime('+1 week', $week)) {

        $date = date('Ymd', $week);

        $convertToArray = explode(' ', $date);
        echo $convertToArray[0] . '<br>';

    }
}

getDiffDates('20180902', '20180920');

