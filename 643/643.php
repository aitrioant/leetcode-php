<?php

class Problem643
{
    public function run()
    {
        $samples = [Samples::getSample1(), Samples::getSample2()];
        foreach ($samples as $sample) {
            $result = $this->findMaxAverage($sample['nums'], $sample['k']);
            echo 'nums = [' . implode(',', $sample['nums']) . ']'
                . ' => ' . $result . PHP_EOL;
        }
    }

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    function findMaxAverage(array $nums, int $k): float
    {
        $sum = array_sum(array_slice($nums, 0, $k));
        $max = $sum;

        for ($i = $k; $i < count($nums); $i++) {
            $sum += $nums[$i];
            $sum -= $nums[$i - $k];
            $max = max($max, $sum);
        }

        return $max / $k;
    }

}