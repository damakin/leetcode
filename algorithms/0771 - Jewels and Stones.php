<?php

class Solution
{

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    public function numJewelsInStones(string $J, string $S): int
    {
        $jewels = [];
        for ($i = 0; $i < strlen($J); $i++) {
            $jewels[$J[$i]] = true;
        }

        $count = 0;
        for ($i = 0; $i < strlen($S); $i++) {
            if ($jewels[$S[$i]]) {
                $count++;
            }
        }

        return $count;
    }
}
