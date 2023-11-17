<?php

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $result = 0;

        foreach ($nums as $num) {
            $result ^= $num;
        }

        return $result;
    }
}

$solution = new Solution();

// Example 1
$nums1 = [2, 2, 1];
echo $solution->singleNumber($nums1) . "\n"; // Output: 1

// Example 2
$nums2 = [4, 1, 2, 1, 2];
echo $solution->singleNumber($nums2) . "\n"; // Output: 4

// Example 3
$nums3 = [1];
echo $solution->singleNumber($nums3) . "\n"; // Output: 1
