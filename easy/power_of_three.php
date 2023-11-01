<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n) {
        
        if ($n <= 0) {
            return false; // Negative numbers and zero are not powers of three
        }
    
        while ($n > 1) {
            if ($n % 3 !== 0) {
                return false; // If n is not divisible by 3, it's not a power of three
            }
            $n /= 3;
        }
    
        return $n === 1;

    }
}

$solution = new Solution();

$n = 243;

print_r($solution->isPowerOfThree($n));