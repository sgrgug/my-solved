<?php 
class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        $bracketPairs = [
            ')' => '(',
            '}' => '{',
            ']' => '[',
        ];

        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];

            if (array_key_exists($char, $bracketPairs)) {
                // If the current character is a closing bracket
                // Pop the top element from the stack if it's not empty,
                // otherwise assign a dummy value.
                $topElement = empty($stack) ? '#' : array_pop($stack);

                // Check if the popped element matches the corresponding opening bracket
                if ($topElement !== $bracketPairs[$char]) {
                    return false;
                }
            } else {
                // If the current character is an opening bracket, push it onto the stack
                array_push($stack, $char);
            }
        }

        // If the stack is empty, then all brackets were closed correctly
        return empty($stack);
    }
}


$solution = new Solution();
var_dump($solution->isValid("()")); // Output: true
var_dump($solution->isValid("()[]{}")); // Output: true
var_dump($solution->isValid("(]")); // Output: false
