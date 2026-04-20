<?php

class Samples
{
    public static function getSample1(): array
    {
        $list1 = new ListNode(1, new ListNode(2, new ListNode(4)));
        $list2 = new ListNode(1, new ListNode(3, new ListNode(4)));
        return [$list1, $list2];
    }

    public static function getSample2(): array
    {
        return [null, null];
    }

    public static function getSample3(): array
    {
        $list2 = new ListNode(0);
        return [null, $list2];
    }
}