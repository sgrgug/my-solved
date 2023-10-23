<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {

        $sign = $x < 0 ? true : false;
        $x = (string)$x;

        $arrayInt = str_split((string)$x);

        $r = array_reverse($arrayInt);

        $finalInt = intval(implode("", $r));

        if ($finalInt >= -2147483648 && $finalInt <= 2147483647)
        {
            return $sign ? "-".$finalInt : $finalInt;
        } else {
            return 0;
        }
    }
}

$solution = new Solution();

$x = 1534236469;
// $x = 1200000;

print_r($solution->reverse($x));