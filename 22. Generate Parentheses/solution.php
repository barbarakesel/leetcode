<?php
class Solution {

    function generateParenthesis($n) {
         return $this->variants("", 0, 0, $n);
    }
        function variants($current, $open_count, $close_count, $n)
        {
            $res = [];
            if (strlen($current) == $n*2) {
                $res[] = $current;
                return $res;
            }
            if ($open_count < $n) {
                $res = array_merge($res, $this->variants($current.'(', $open_count+1, $close_count, $n));    }
            if ($close_count < $open_count) {
                $res = array_merge($res, $this->variants($current.')', $open_count, $close_count+1, $n));
            }
            return $res;
        }
        
}
