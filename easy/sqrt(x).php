<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        if ($x == 0) {
            return 0;
        }

        $left = 1;
        $right = $x;
        while ($left <= $right) {
            $mid = $left + intval(($right - $left) / 2);
            if ($mid * $mid > $x) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }

        return $right;
    }
}

// Example usage:
$solution = new Solution();
$x = 8;
$result = $solution->mySqrt($x);
echo $result; // Output: 2
