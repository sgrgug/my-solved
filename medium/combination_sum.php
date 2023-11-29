<?php 
class Solution {
    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target) {
        $result = [];
        $this->backtrack($candidates, $target, 0, [], $result);
        return $result;
    }

    function backtrack($candidates, $target, $start, $current, &$result) {
        if ($target === 0) {
            $result[] = $current;
            return;
        }

        for ($i = $start; $i < count($candidates); $i++) {
            if ($candidates[$i] > $target) {
                continue; // Skip if the current candidate is greater than the target
            }

            // Include the current candidate in the current combination
            $current[] = $candidates[$i];

            // Recursively call backtrack with the updated target and current combination
            $this->backtrack($candidates, $target - $candidates[$i], $i, $current, $result);

            // Backtrack by removing the last added element to explore other possibilities
            array_pop($current);
        }
    }
}

// Example usage:
$solution = new Solution();
print_r($solution->combinationSum([2,3,6,7], 7));
print_r($solution->combinationSum([2,3,5], 8));
print_r($solution->combinationSum([2], 1));
