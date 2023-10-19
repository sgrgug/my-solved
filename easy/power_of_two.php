<?php

class Solution
{

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n)
    {

        if ($n <= 0) {
            return false;
        } else {

            $counter = 0;

            while ($n > 1) {
                if ($n % 2 == 0) {
                    $n = $n / 2;
                    $counter++;
                } else {
                    return false;
                }
            }

            return true;
        }
    }
}

$solution = new Solution();

$n = 0;

print_r($solution->isPowerOfTwo($n));
