<?php

/**
 * Given a non-empty array of integers nums, every element appears twice except for one. Find that single one. 
 * You must implement a solution with a linear runtime complexity and use only constant extra space.
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {

        for ($i = 0; $i < count($nums); $i++) {
            $isUnique = true;
            
            // Step 2: Check if the current integer is unique
            for ($j = 0; $j < count($nums); $j++) {
                if ($i !== $j && $nums[$i] == $nums[$j]) {
                    $isUnique = false;
                    break;
                }
            }
            
            // Step 3: If the integer is unique, add it to the result array
            if ($isUnique) {
                $uniqueIntegers = $nums[$i];
            }
        }

        return $uniqueIntegers;

    }
}

$solution = new Solution();

$nums = [4,1,2,1,2];

print_r($solution->singleNumber($nums));