<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {

        $final = [];

        for($i = 0; $i < count($nums1); $i++)
        {
            if(in_array($nums1[$i], $nums2) && !in_array($nums1[$i], $final))
            {
                $final[] = $nums1[$i];
            }
        }

        return $final;

    }
}

$solution = new Solution();

// $nums1 = [1, 2, 2, 1];
// $nums2 = [2, 2];

$nums1 = [9, 4, 9, 8, 4];
$nums2 = [4, 9, 5];

print_r($solution->intersection($nums1, $nums2));