<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return String
     */
    function largestNumber($nums) {

        $final = [];

        for($i = 0; $i < count($nums); $i++)
        {
            if($nums[$i] < 10)
            {
                $final[] = $nums[$i];
            } else {
                $final[] = (int)($nums[$i] / 10);
                $final[] = $nums[$i] % 10;
            }

        }
        
        return $final;
    }
}

$solution = new Solution();

$nums = [34,2,50,7];

// print_r($solution->largestNumber($nums));
// foreach($solution->largestNumber($nums) as $key => $val)
// {
//     echo $val;
//     echo "<br />";
// }

$va = sort($solution->largestNumber($nums));
print_r($va);