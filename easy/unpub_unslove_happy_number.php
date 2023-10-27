<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {

        if($n < 10)
        {

        }else {

            $modified = [];
            $sum = 0;

            $n = (string)$n;
            $n = str_split($n);

            foreach($n as $key => $val)
            {
                $modified[] = (int)$val * (int)$val;
            }

            foreach($modified as $key => $final)
            {
                $sum += $final;
            }

            if($sum === 1)
            {
                return true;
            } else {
                $this->isHappy($sum);
            }
        }
        
    }
}


$solution = new Solution();

$n = 19;

print_r($solution->isHappy($n));