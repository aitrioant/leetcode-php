#!/usr/bin/env php

<?php

class Problem2515
{

    public function run()
    {
        $samples = [Samples::getSample1()/*, Samples::getSample2(), Samples::getSample3(), Samples::getSample4()*/];

        foreach ($samples as $index => $sample) {
            echo "Sample " . ($index + 1) . ": " . PHP_EOL;
            echo "Input: words = " . json_encode($sample['words']) . ", target = \"" . $sample['target'] . "\", startIndex = " . $sample['startIndex'] . PHP_EOL;
            $result = $this->closestTarget($sample['words'], $sample['target'], $sample['startIndex']);
            echo "Output: " . $result . PHP_EOL;
            echo str_repeat("-", 20) . PHP_EOL;
        }
    }

    /**
     * @param String[] $words
     * @param String $target
     * @param Integer $startIndex
     * @return Integer
     */
    function closestTarget(array $words, string $target, int $startIndex)
    {
        if (!in_array($target, $words)) {
            return -1;
        }

        $distanceAhead = 0;
        $currentPosition = $startIndex;

        while (true) {
            if ($this->checkNeighbours($words, $target, $currentPosition)) {
                $distanceAhead++;
                break;
            }

            $currentPosition = $this->nextPosition($words, $currentPosition);
            $distanceAhead++;

            if ($currentPosition === $startIndex) {
                break;
            }
        }

        $distanceBefore = 0;
        $currentPosition = $startIndex;

        while (true) {
            if ($this->checkNeighbours($words, $target, $currentPosition)) {
                $distanceBefore++;
                break;
            }

            $currentPosition = $this->prevPosition($words, $currentPosition);
            $distanceBefore++;

            if ($currentPosition === $startIndex) {
                break;
            }
        }

        return min($distanceBefore, $distanceAhead);
    }

    function nextPosition(array $arr, int $pos)
    {
        return ($pos + 1) % count($arr);
    }

    function prevPosition(array $arr, int $pos)
    {
        $count = count($arr);

        return ($pos - 1 + $count) % $count;
    }

    function checkNeighbours(array $arr, string $target, int $pos)
    {
        if ($arr[$this->nextPosition($arr, $pos)] === $target || $arr[$this->prevPosition($arr, $pos)] === $target) {
            return 1;
        }

        return 0;
    }
}