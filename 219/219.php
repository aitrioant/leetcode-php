<?php

class Problem219
{
    public function run()
    {
        $samples = [Samples::getSample1(), Samples::getSample2(), Samples::getSample3()];
        foreach ($samples as $sample) {
            $result = $this->containsNearbyDuplicate($sample['nums'], $sample['k']);
            echo 'nums = [' . implode(',', $sample['nums']) . '], k = ' . $sample['k']
                . ' => ' . ($result ? 'true' : 'false') . PHP_EOL;
        }
    }

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate(array $nums, int $k): bool
    {
        foreach ($nums as $i => $num1) {
            $slice = array_slice($nums, $i + 1, count($nums) - $i);
            foreach ($slice as $j => $num2) {
                if ($num1 === $num2 && abs($i - ($j + $i + 1)) <= $k) {
                    return true;
                }
            }
        }
        return false;
    }
}