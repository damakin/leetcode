<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function addTwoNumbers(ListNode $l1, ListNode $l2)
    {
        $countOrder = ($this->getListSize($l1) > $this->getListSize($l2)) ? [$l1, $l2] : [$l2, $l1];
        $addendum1 = $countOrder[0];
        $addendum2 = $countOrder[1];

        $result = $r = null;

        $carryOver = 0;
        do {
            $val = $addendum1->val + $addendum2->val + $carryOver;

            if ($val >= 10) {
                $carryOver = 1;
                $val -= 10;
            } else {
                $carryOver = 0;
            }

            if ($r) {
                $r->next = new ListNode($val, null);
                $r = $r->next;
            } else {
                $r = new ListNode($val, null);
                $result = $r;
            }

            $addendum1 = $addendum1->next;
            $addendum2 = $addendum2->next ?? new ListNode();
        } while ($addendum1 !== null);

        if ($carryOver == 1) {
            $r->next = new ListNode(1);
        }

        return $result;
    }

    public function getListSize($list): int
    {
        $size = 1;
        while ($list->next !== null) {
            $size++;
            $list = $list->next;
        }
        return $size;
    }
}
