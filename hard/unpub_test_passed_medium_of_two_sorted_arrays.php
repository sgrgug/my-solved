<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {

        $twoMergeArray = array_merge($nums1, $nums2);

        $twoMergeArray = (int)implode("", $twoMergeArray);

        $twoMergeArray = (string)$twoMergeArray;


        if($twoMergeArray == 0)
        {
            $count = -1;
        } else {
            $twoMergeArray = str_split($twoMergeArray);
            
            $count = count($twoMergeArray);
        }
        
        // return $twoMergeArray;




        // return $count;
        
        $medium = (($count + 1) / 2);

        return (float)$medium;
        

    }
}


$solution = new Solution();

// $nums1 = [1, 2];
// $nums2 = [3, 4];

$nums1 = [0, 0];
$nums2 = [0, 0];

print_r($solution->findMedianSortedArrays($nums1, $nums2));