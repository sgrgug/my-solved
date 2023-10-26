<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        if (in_array($target, $nums)) {
            foreach ($nums as $key => $num) {

                if ($num === $target) {
                    return $key;
                }
            }
        } else {

            array_push($nums, $target);
            sort($nums);

            foreach ($nums as $key => $num) {

                if ($num === $target) {
                    return $key;
                }
            }
        }
    }
}

$solution = new Solution();

$nums = [1, 3, 5, 6];
// $target = 5;
$target = 2;

print_r($solution->searchInsert($nums, $target));
