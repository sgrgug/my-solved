<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        
        $nums = array_unique($nums);

        sort($nums);
        $max = max($nums);

        for($i = 0; $i < count($nums); $i++)
        {
            if($nums[$i] <= $max);
        }

        return $max;

    }
}

$solution = new Solution();

$nums = [3,4,3,2,1];

print_r($solution->thirdMax($nums));