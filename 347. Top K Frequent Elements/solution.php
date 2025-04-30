<?php
class Solution {

    function topKFrequent($nums, $k) {
        $number=[];
        $res = [];
        $number = array_count_values($nums);
        arsort($number);
        $count = 0;
        foreach ($number as $key => $value){
            if ($count >= $k) {
                break;
            }
            $res[] = $key;
            $count++;
        }
        return $res;
    }
}
