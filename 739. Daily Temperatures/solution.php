<?php
class Solution {

 
    function dailyTemperatures($temperatures) {
        $res = array_fill(0,count($temperatures),0);
        $stack = [];
        for($i = 0; $i < count($temperatures); $i++) {
           while (!empty($stack) && $temperatures[$i] > $temperatures[end($stack)]) {
            $prevIndex = array_pop($stack);
            $res[$prevIndex] = $i - $prevIndex;
            }
        $stack[] = $i;
        }
        return $res;
    }
}
