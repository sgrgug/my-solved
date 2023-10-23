<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {

        $sign = $x < 0 ? true : false;
        $length = strlen((string)$x);
        
        for($i = 0; $i < $length; $i++)
        {
            $x = (int)$x;
            if($x % 10 === 0)
            {
                (int)$x = $x / 10;
            } else {
                continue;
            }
        }

        $arrayInt = str_split((string)$x);
        rsort($arrayInt);

        $finalInt = intval(implode("", $arrayInt));
        
        return $sign ? "-".$finalInt : $finalInt;
        
    }
}

$solution = new Solution();

$x = 901000;

print_r($solution->reverse($x));