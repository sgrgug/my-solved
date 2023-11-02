<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums)
    {

        $nums = array_unique($nums);

        sort($nums);

        if(array_key_exists(count($nums)-3, $nums))
        {
            return $nums[count($nums)-3];
        } elseif (array_key_exists(count($nums)-2, $nums)) {
            return $nums[count($nums)-1];
        } elseif (array_key_exists(count($nums)-1, $nums)) {
            return $nums[count($nums)-1];
        } else {
            return $nums[0];
        }
         
        return $nums[count($nums)-3];


        return $nums;
    }
}

$solution = new Solution();

// $nums = [3, 4, 3, 2, 1];
// $nums = [3, 4, 3, 2, 1, 5, 6];
$nums = [1,1,1];

print_r($solution->thirdMax($nums));
