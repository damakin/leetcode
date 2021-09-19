<?php

class Solution
{

    /**
     * @param String $address
     * @return String
     */
    public function defangIPaddr($address)
    {
        return str_replace('.', '[.]', $address);
    }
}
