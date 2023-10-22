<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        
        $sign = $x >= 0 ? true : false;
        
        // $x = $x % 10 == 0 ? $x / 10 : $x;
        
        // $x = (string)$x;
        $final = [];
        
        for($i = 0; $i < strlen((string)$x); $i++)
        {
            $x = (int)$x;
            
            if($x % 10 == 0)
            {
                (int)$x = $x / 10;
            } else {
                exit();
            }
        }
        
        for($j = 0; $j < strlen((string)$x); $j++)
        {
            $final[] = $x[$j];
        }
        
        // for($i = 0; $i < strlen($x); $i++)
        // {
        //     $final[] = $x[$i];
        // }

        rsort($final);

        $int = intval(implode("", $final));

        if($sign)
        {
            return $int;
        } else {
            return "-".$int;
        }
    }
}

$solution = new Solution();

$x = 1200;

print_r($solution->reverse($x));