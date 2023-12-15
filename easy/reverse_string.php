<?php 
class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $left = 0;
        $right = count($s) - 1;

        while ($left < $right) {
            // Swap characters at the left and right indices
            $temp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $temp;

            // Move the indices towards the center
            $left++;
            $right--;
        }
    }
}

// Example usage:
$solution = new Solution();

$input1 = ["h", "e", "l", "l", "o"];
$solution->reverseString($input1);
print_r($input1); // Output: ["o", "l", "l", "e", "h"]

$input2 = ["H", "a", "n", "n", "a", "h"];
$solution->reverseString($input2);
print_r($input2); // Output: ["h", "a", "n", "n", "a", "H"]
