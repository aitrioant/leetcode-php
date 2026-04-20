<?php

class Samples
{
    public static function getSample1(): array
    {
        $list1 = new ListNode(2, new ListNode(4, new ListNode(3)));
        $list2 = new ListNode(5, new ListNode(6, new ListNode(4)));
        return [$list1, $list2];
    }

    public static function getSample2(): array
    {
        $list1 = new ListNode(0);
        $list2 = new ListNode(0);
        return [$list1, $list2];
    }

    public static function getSample3(): array
    {
        $list1 = new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9)))))));
        $list2 = new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9))));
        return [$list1, $list2];
    }

    public static function getSample4(): array
    {
        $list1 = new ListNode(1);
        $list2 = new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9))));
        return [$list1, $list2];
    }
}