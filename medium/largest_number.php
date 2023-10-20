<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return String
     */
    function largestNumber($nums) {
        usort($nums, function($a, $b) {
            $str1 = $a . $b;
            $str2 = $b . $a;
            return bccomp($str2, $str1);
        });
    
        $result = implode("", $nums);
    
        // Remove leading zeros
        $result = ltrim($result, '0');
    
        // If the result is an empty string, return '0'
        return $result === '' ? '0' : $result;
    }
}

$solution = new Solution();

$nums = [34,2,50,7];

echo $solution->largestNumber($nums);
