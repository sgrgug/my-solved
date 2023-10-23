<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        
        $x = (string)$x;

        $array = str_split($x);

        $rArray = array_reverse($array);

        $rString = implode("", $rArray);

        // return $x;
        // return $rString;

        if($rString === $x)
        {
            return true;
        } else {
            return false;
        }


    }
}

$solution = new Solution();

$x = 10;

print_r($solution->isPalindrome($x));