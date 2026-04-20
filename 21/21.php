<?php

require __DIR__ . '/ListNode.php';

class Problem21
{
    public function run()
    {
        $samples = [Samples::getSample1(), Samples::getSample2(), Samples::getSample3()];
        foreach ($samples as $sample) {
            $list1 = $sample[0];
            $list2 = $sample[1];
            $result = $this->mergeTwoLists($list1, $list2);
            echo $this->listToString($result) . PHP_EOL;

        }

    }

    private function listToString(?ListNode $node): string
    {
        $values = [];

        while ($node !== null) {
            $values[] = (string)$node->val;
            $node = $node->next;
        }

        return implode(' -> ', $values);
    }


    /**
     * @param ?ListNode $list1
     * @param ?ListNode $list2
     * @return ?ListNode
     */
    function mergeTwoLists(?ListNode $list1, ?ListNode $list2): ?ListNode
    {
        if ($list1 === null && $list2 === null) {
            return null;
        }

        if ($list1 === null) {
            return new ListNode($list2->val, $this->mergeTwoLists($list1, $list2->next));
        }

        if ($list2 === null) {
            return new ListNode($list1->val, $this->mergeTwoLists($list1->next, $list2));
        }

        if ($list1->val <= $list2->val) {
            return new ListNode($list1->val, $this->mergeTwoLists($list1->next, $list2));
        } else {
            return new ListNode($list2->val, $this->mergeTwoLists($list1, $list2->next));
        }
    }
}