<?php 

class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function multiply($num1, $num2) {
        $len1 = strlen($num1);
        $len2 = strlen($num2);

        // Initialize result array with zeros
        $result = array_fill(0, $len1 + $len2, 0);

        // Multiply each digit and add to result
        for ($i = $len1 - 1; $i >= 0; $i--) {
            for ($j = $len2 - 1; $j >= 0; $j--) {
                $mul = ($num1[$i] - '0') * ($num2[$j] - '0');
                $sum = $mul + $result[$i + $j + 1];
                
                $result[$i + $j] += (int)($sum / 10);
                $result[$i + $j + 1] = $sum % 10;
            }
        }

        // Remove leading zeros
        $resultStr = implode('', $result);
        $resultStr = ltrim($resultStr, '0');

        // If the result is an empty string, the product is 0
        return $resultStr === '' ? '0' : $resultStr;
    }
}

// Example usage:
$solution = new Solution();
echo $solution->multiply("2", "3"); // Output: "6"
echo $solution->multiply("123", "456"); // Output: "56088"
