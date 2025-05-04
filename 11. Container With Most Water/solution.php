<?php
class Solution {
    function maxArea($height) {
        $left = 0;
        $right = count($height) - 1;
        $max = [];
        while ($left < $right) {
            $length = abs($left - $right);
            if($height[$left] > $height[$right]) {
                $amount= $length * $height[$right];
            } else $amount= $length * $height[$left];

            $max[]= $amount;
        if ($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }
        return max($max);
    }
}
