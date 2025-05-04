<?php
class Solution {
    function carFleet($target, $position, $speed) {
        $array =[];
        $stack = [];
        for($i = 0; $i < count($position); $i++) {
            $array[$position[$i]] = $speed[$i];
        }
        krsort($array);

        foreach($array as $key => $value) {
                $time = ($target-$key)/$value;
                if(empty($stack) || $time>end($stack)) {
                    $stack[] = $time;
                }
        }
        return count($stack);
    }
}
