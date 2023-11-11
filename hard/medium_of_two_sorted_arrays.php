<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {

        $twoMergeArray = array_merge($nums1, $nums2);
        sort($twoMergeArray);

        $count = count($twoMergeArray);

        if ($count % 2 == 0) {
            // even
            $firstIndex = (int)($count / 2) - 1;
            $secondIndex = $firstIndex + 1;

            $median = ($twoMergeArray[$firstIndex] + $twoMergeArray[$secondIndex]) / 2;

            return $median;
        } else {
            // odd

            $index = (int)(($count + 1) / 2) - 1;

            $median = $twoMergeArray[$index];
            
            return $median;
        }
    }
}

$solution = new Solution();

$nums1 = [9, 10, 12, 13, 13, 13, 15, 15];
$nums2 = [16, 16, 18, 22, 23, 24, 24, 25];

print_r($solution->findMedianSortedArrays($nums1, $nums2));
