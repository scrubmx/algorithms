<?php

/**
 * @param array $array
 * @return array
 */
function bubble_sort(array $array)
{
    $is_sorted = false;
    $checks = 0;
    $array_length = sizeof($array);

    for ($i=0; $i < $array_length-1; $i++) {
        if ($array[$i] <= $array[$i+1]) {
            $checks++;
        }

        if ($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1] = $array[$i];
            $array[$i] = $temp;
        }
    }

    if ($checks == $array_length-1) {
        $is_sorted = true;
    }

    if ($is_sorted) {
        return $array;
    } else {
        return bubble_sort($array);
    }
}
