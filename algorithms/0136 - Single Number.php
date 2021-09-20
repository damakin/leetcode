<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function singleNumber(array $nums): int
    {
        $ar = [];

        foreach ($nums as $num) {
            if (!isset($ar[$num])) {
                $ar[$num] = true;
            } else {
                unset($ar[$num]);
            }
        }

        return array_keys($ar)[0];
    }
}
