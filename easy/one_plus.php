<?php

class Solution {
    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $n = count($digits);

        for ($i = $n - 1; $i >= 0; $i--) {
            if ($digits[$i] < 9) {
                $digits[$i]++;
                return $digits;
            } else {
                $digits[$i] = 0;
            }
        }

        // If we reach here, all digits were 9, so we need to add a new leading 1.
        array_unshift($digits, 1);

        return $digits;
    }
}

$solution = new Solution();
$digits = [7, 2, 8, 5, 0, 9, 1, 2, 9, 5, 3, 6, 6, 7, 3, 2, 8, 4, 3, 7, 9, 5, 7, 7, 4, 7, 4, 9, 4, 7, 0, 1, 1, 1, 7, 4, 0, 0, 6];
print_r($solution->plusOne($digits));
