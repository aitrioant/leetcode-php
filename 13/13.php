<?php

class Problem13
{

    const CHARS = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000];

    public function run()
    {
        echo $this->romanToInt(Samples::getSample1()) . "\n";
        echo $this->romanToInt(Samples::getSample2()) . "\n";
        echo $this->romanToInt(Samples::getSample3()) . "\n";
    }

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt(string $s)
    {
        $result = 0;
        $prev = null;

        foreach (array_reverse(str_split($s)) as $char) {
            $value = $this->characterValue($char, $prev);
            $result += $value;
            $prev = $char;
        }

        return $result;
    }

    function characterValue(string $curr, ?string $prev = null): int
    {
        $currValue = self::CHARS[$curr];
        if (!isset($prev)) {
            return $currValue;
        }

        $prevValue = self::CHARS[$prev];
        if ($prev !== null && $currValue < $prevValue) {
            return -$currValue;
        }

        return $currValue;
    }
}