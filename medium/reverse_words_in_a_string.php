<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {

        $s = preg_replace('/\s+/', ' ', $s);
        $s = explode(" ", $s);
        $s = array_reverse($s);

        $s = trim(implode(" ", $s));

        return $s;
    }
}

$solution = new Solution();

// $s = "a good   example";
$s = " hello world ";

print_r($solution->reverseWords($s));