<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {

        $twoMergeArray = array_merge($nums1, $nums2);


        $count = count($twoMergeArray);
        
        $medium = ($count + 1) / 2;

        return (float)$medium;
        

    }
}


$solution = new Solution();

$nums1 = [1, 2];
$nums2 = [3, 4];

print_r($solution->findMedianSortedArrays($nums1, $nums2));