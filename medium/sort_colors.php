<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums) {
        $low = 0;        // Pointer for 0
        $high = count($nums) - 1;   // Pointer for 2
        $current = 0;    // Current pointer
        
        while ($current <= $high) {
            if ($nums[$current] == 0) {
                $this->swap($nums, $current, $low);
                $current++;
                $low++;
            } elseif ($nums[$current] == 2) {
                $this->swap($nums, $current, $high);
                $high--;
            } else {
                $current++;
            }
        }
    }
    
    function swap(&$nums, $i, $j) {
        $temp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $temp;
    }
}

// Example usage:
$nums1 = [2, 0, 2, 1, 1, 0];
$nums2 = [2, 0, 1];

$solution = new Solution();
$solution->sortColors($nums1);
$solution->sortColors($nums2);

echo "Output for nums1: " . implode(", ", $nums1) . "\n";
echo "Output for nums2: " . implode(", ", $nums2) . "\n";
