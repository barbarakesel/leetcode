<?php
class Solution {

    function groupAnagrams($strs) {
        $arr = [];
        if (empty($strs)) return [];
        $res = [];
        foreach($strs as $str)
        {
            $arr = str_split($str);
            sort($arr);
            $key = implode ($arr);

            $res[$key][] = $str;
        }
        return $res;
    }
}
