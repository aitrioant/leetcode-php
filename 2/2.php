<?php

require __DIR__ . '/ListNode.php';

class Problem2
{
    public function run()
    {
        $samples = [Samples::getSample1(), Samples::getSample2(), Samples::getSample3(), Samples::getSample4()];
        foreach ($samples as $sample) {
            $list1 = $sample[0];
            $list2 = $sample[1];
            $result = $this->addTwoNumbers($list1, $list2);
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
     * @param ?ListNode $l1
     * @param ?ListNode $l2
     * @return ?ListNode
     */
    function addTwoNumbers(?ListNode $l1, ?ListNode $l2): ?ListNode
    {
        if ($l1 === null && $l2 === null) {
            return null;
        }

        $v1 = $l1?->val ?? 0;
        $v2 = $l2?->val ?? 0;

        $sum = $v1 + $v2;

        $next1 = $l1?->next;
        $next2 = $l2?->next;

        if ($sum >= 10) {
            $next1 = $this->addOneTo($next1);
            $sum -= 10;
        }

        return new ListNode(
            $sum,
            $this->addTwoNumbers($next1, $next2)
        );
    }

    function addOneTo(?ListNode $list): ListNode
    {
        if ($list === null) {
            return new ListNode(1);
        }

        return new ListNode($list->val + 1, $list->next);
    }
}