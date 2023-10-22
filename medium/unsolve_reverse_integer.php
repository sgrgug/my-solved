<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        
        $sign = $x >= 0 ? true : false;

        // if(!$sign)
        // {
        //     return "sano xa";
        // } else {
        //     return "xaina";
        // }
        
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
        
        // Convert the integer to a string and then split it into an array
        $a = str_split((string)$x);
        
        rsort($a);

        $intV = implode("", $a);

        $intd = intval($intV);

        return $intd;

        if(!$sign)
        {
            return $intd;
        } else {
            return "-".$intd;
        }

        // $x = (string)$x;

        // for($j = 0; $j < strlen($x); $j++)
        // {
        //     // $final[] = $x[$j];
        //     echo $x;
        //     echo "<br />";
        // }
        
        // $int = intval(implode("", $final));
        // return $int;

        // for($i = 0; $i < strlen($x); $i++)
        // {
        //     $final[] = $x[$i];
        // }

        // rsort($final);

        // $int = intval(implode("", $final));

        // if($sign)
        // {
        //     return $int;
        // } else {
        //     return "-".$int;
        // }
    }
}

$solution = new Solution();

$x = 1200;

print_r($solution->reverse($x));