<?php

class Problem3
{
    public function run()
    {
        $samples = [Samples::getSample1(), Samples::getSample2(), Samples::getSample3()];
        foreach ($samples as $sample) {
            $result = $this->lengthOfLongestSubstring($sample);
            echo $result . PHP_EOL;

        }

    }

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring(string $s): string
    {
        $longests = [];
        $current = [];

        foreach (str_split($s) as $char) {
            if (isset($current[$char])) {
                [$current, $removed] = $this->reindexListFromChar($char, $current);
                $longests = array_merge($longests, array_values($removed));
            }

            $current = $this->addCharToEveryList($char, $current);
        }

        $longests = array_merge($longests, array_values($current));
        $max = "";
        foreach ($longests as $longest) {
            if (strlen($longest) > strlen($max)) {
                $max = $longest;
            }
        }
        return strlen($max);
    }

    function addCharToEveryList(string $newChar, array $lists): array
    {
        foreach ($lists as $index => $list) {
            $lists[$index] .= $newChar;
        }
        $lists[$newChar] = $newChar;

        return $lists;
    }

    function reindexListFromChar(string $foundChar, array $listOfSubstrings): array
    {
        $charsToKeep = substr($listOfSubstrings[$foundChar],1);
        $reindexedList = [];

        foreach (str_split($charsToKeep) as $charToKeep) {
            $reindexedList[$charToKeep] = $listOfSubstrings[$charToKeep];
            unset($listOfSubstrings[$charToKeep]);
        }
        return [$reindexedList, $listOfSubstrings];
    }
}