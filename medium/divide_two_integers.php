<?php
class Solution {

    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor) {
        

        $output = $dividend / $divisor;

        if($output <= 2147483647)
        {
            return (int)$output;
        } else {
            return 2147483647;
        }


    }
}

$solution = new Solution();

$dividend = 7;

$divisor = -3;

print_r($solution->divide($dividend, $divisor));