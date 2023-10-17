<?php

class Solution
{
    /**
     * @param String s
     * 
     * @return Integer
     */

    function lengthOfLastWord($s)
    {
        $words = explode(" ", $s);
        $words = array_filter($words);
        $lastWord = end($words);

        return strlen(($lastWord));
    }
}

$solution = new Solution();

$s = "   fly me   to   the moon  ";

print_r($solution->lengthOfLastWord($s));
