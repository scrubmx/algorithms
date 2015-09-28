<?php
/**
 * Bubble sort, sometimes referred to as sinking sort, is a simple sorting algorithm
 * that repeatedly steps through the list to be sorted, compares each pair of adjacent
 * items and swaps them if they are in the wrong order.
 *
 * @link https://en.wikipedia.org/wiki/Bubble_sort
 *
 * @author Jorge González <scrub.mx@gmail.com>
 */

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
