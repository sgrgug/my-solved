<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfFour($n) {
        // Check if $n is a positive power of two
        return $n > 0 && ($n & ($n - 1)) == 0 && ($n - 1) % 3 == 0;
    }
}

// Example usage
$solution = new Solution();
$n1 = 16;
$result1 = $solution->isPowerOfFour($n1);
echo $result1 ? 'true' : 'false'; // Output: true

$n2 = 5;
$result2 = $solution->isPowerOfFour($n2);
echo $result2 ? 'true' : 'false'; // Output: false

$n3 = 1;
$result3 = $solution->isPowerOfFour($n3);
echo $result3 ? 'true' : 'false'; // Output: true
