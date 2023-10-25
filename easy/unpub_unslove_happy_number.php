<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {

        $newInt = [];
        $n = str_split((string)$n);

        foreach($n as $key => $val){

            $integer = $val[$key];

            $newInt[] = $newInt[$key] ^ 2 + (int)$integer ^ 2;
        }

        return $newInt;
        
    }
}


$solution = new Solution();

$n = 19;

print_r($solution->isHappy($n));