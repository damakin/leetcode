<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $hashMap = [];

        for ($i = 0; $i < count($nums); $i++) {
            $hashMap[$nums[$i]] = $i;
        }

        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];

            if (array_key_exists($complement, $hashMap) && $hashMap[$complement] != $i) {
                return [$i, $hashMap[$complement]];
            }
        }
    }
}
