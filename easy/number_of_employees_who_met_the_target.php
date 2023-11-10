<?php

class Solution {

    /**
     * @param Integer[] $hours
     * @param Integer $target
     * @return Integer
     */
    function numberOfEmployeesWhoMetTarget($hours, $target) {
        $count = 0;

        foreach ($hours as $workedHours) {
            if ($workedHours >= $target) {
                $count++;
            }
        }

        return $count;
    }
}

// Example usage:
$solution = new Solution();
$hours = [30, 25, 40, 20, 35];
$target = 30;

$result = $solution->numberOfEmployeesWhoMetTarget($hours, $target);
echo "Number of employees who worked at least $target hours: $result";
