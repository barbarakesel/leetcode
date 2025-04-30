<?php
class Solution {
    function productExceptSelf($nums) {
        $res = [];
        $multiply = 1;
        $zero = 0;
        for ($i=0; $i<count($nums);$i++){
            if ($nums[$i]!=0)
            $multiply *= $nums[$i];
            else $zero++;
        }
        if ($zero > 1) {$res = array_fill(0, count($nums), 0); return $res;}
        for  ($i=0; $i<count($nums);$i++){
            if ($zero == 0){
            $res[$i] = $multiply / $nums[$i];
            } 
            else if ($nums[$i]==0) {
                $res[$i] = $multiply;
            } else {
                $res[$i] = 0;
            }
        }

        return $res;
    }
}
