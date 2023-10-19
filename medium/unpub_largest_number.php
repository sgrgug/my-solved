<?php

// class Solution {

//     /**
//      * @param Integer[] $nums
//      * @return String
//      */
//     function largestNumber($nums) {

//         $final = [];

//         foreach($nums as $key => $num)
//         {
//             if($num < 10)
//             {
//                 $final[] = $num[$key];
//             } else {
//                 $final[] = $num / 10;
//                 // $final[] = $num % 2;
//             }

//             return $final;
//         }

//     }
// }

// $solution = new Solution();

// $nums = [34,2,50,7];
// // $nums = 344;

// print_r($solution->largestNumber($nums));


$nums = ['s', 'g', 'd', 'e'];
$a = [];

foreach($nums as $key => $num)
{
    $a[] = $num[$key];
}
print_r($a);