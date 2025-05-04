<?php
class Solution {
    function minEatingSpeed($piles, $h) {
        $left = 1;
        $right = max($piles);
        $res = $right;
        if (count($piles) == 1 ) {return ceil($piles[0]/$h);}
        while ($left <= $right) {
            $medium = intdiv($left + $right, 2);
            $hours = 0;
            for ($i = 0; $i < count($piles); $i++) {
                $hours += ceil($piles[$i]/$medium);
            }
            if ($hours<=$h) {
                $right = $medium-1;
                $res = $medium;
            } else {
                $left = $medium + 1;
                }
        }
        return $res;
    }
}
