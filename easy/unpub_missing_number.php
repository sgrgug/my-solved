<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $min = 0;
        $max = count($nums);

        for($min; $min <= $max; $min++)
        {
            if(!in_array($min, $nums))
            {
                return $min;
            }
        }
    }
}

$solution = new Solution();

$nums = [3, 0, 1];

print_r($solution->missingNumber($nums));
