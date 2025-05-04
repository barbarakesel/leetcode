<?php
class Solution {

    function searchMatrix($matrix, $target) {
        for($i = 0; $i < count($matrix); $i++){ 
        $start = 0;
        $end = count($matrix[$i])-1;
          if($target > $matrix[$i][0]){
            if($target < $matrix[$i][$end]){
                while($start <= $end){
                    $med = floor(($start + $end) / 2);

                    if($matrix[$i][$med] == $target) {
                        return true;
                    }
                    else if($matrix[$i][$med] > $target){
                        $end = $med - 1;
                    }
                    else if($matrix[$i][$med] < $target){
                        $start = $med + 1;
                    }
                }
                } else if ($target == $matrix[$i][$end]){ return true;}
            } else if ($target == $matrix[$i][0]){ return true;}
        }
    return 0;
    }
}
