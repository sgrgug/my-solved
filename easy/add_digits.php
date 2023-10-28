<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        while ($num >= 10) {
            $sum = 0;
            while ($num > 0) {
                $sum += $num % 10;
                $num = (int)($num / 10);
            }
            $num = $sum;
        }
        return $num;
    }
}

$solution = new Solution();

$num = 38;

print_r($solution->addDigits($num));