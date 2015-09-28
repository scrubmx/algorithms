<?php
/**
 * Merge sort is an O(n log n) comparison-based sorting algorithm.
 *
 * Conceptually, a merge sort works as follows:
 *  - Divide the unsorted list into n sublists, each containing 1 element.
 *  - Repeatedly merge sublists to produce new sorted sublists until there is only 1 sublist remaining.
 *
 * @link https://en.wikipedia.org/wiki/Merge_sort
 *
 * @author Jorge González <scrub.mx@gmail.com>
 */

/**
 * @param array $array
 * @return array
 */
function merge_sort(array $array)
{
    $size = sizeof($array);

    if ($size > 1) {
        $pivot = floor($size/2);

        $left  = merge_sort(array_slice($array, 0, $pivot));
        $right = merge_sort(array_slice($array, $pivot, $size));

        $counter1 = $counter2 = 0;

        for ($i=0; $i<$size; $i++) {
            // if we're done processing one half, take the rest from the 2nd half
            if ($counter1 == sizeof($left)) {
                $array[ $i ] = $right[ $counter2 ];
                ++$counter2;
                // if we're done with the 2nd half as well or as long as pieces
                // are still smaller than the 2nd halfin the first half
            } elseif ($counter2 == sizeof($right) or $left[ $counter1 ] < $right[ $counter2 ]) {
                $array[ $i ] = $left[ $counter1 ];
                ++$counter1;
            } else {
                $array[ $i ] = $right[ $counter2 ];
                ++$counter2;
            }
        }
    }

    return $array;
}
