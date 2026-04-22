<?php

class Problem594
{
    public function run()
    {
        $samples = [Samples::getSample1(), Samples::getSample2(), Samples::getSample3()];
        foreach ($samples as $sample) {
            $result = $this->findLHS($sample['nums']);
            echo 'nums = [' . implode(',', $sample['nums']) . ']'
                . ' => ' . $result . PHP_EOL;
        }
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findLHS($nums)
    {
        $frecuencyMap = [];

        foreach ($nums as $num) {
            if (!isset($frecuencyMap[$num])) {
                $frecuencyMap[$num] = 0;
            }
            $frecuencyMap[$num]++;
        }

        $maxLHS = 0;
        foreach ($frecuencyMap as $integer => $count) {
            $next = $integer + 1;
            if (isset($frecuencyMap[$next])) {
                $maxLHS = max($maxLHS, $frecuencyMap[$next] + $count);
            }
        }
        return $maxLHS;

    }



}