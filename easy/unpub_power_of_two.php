<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        
        $counter = 0;

        while($n > 1)
        {
            if($n % 2 == 0)
            {
                $n = $n/2;
                $counter++;
            } else {
                return 'false';
            }
        }

        return 'true';

    }
}

$solution = new Solution();

$n = 3;

print_r($solution->isPowerOfTwo($n));