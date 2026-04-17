<?php

class Problem14
{
    public function run(){
        echo $this->longestCommonPrefix(Samples::getSample1()) . "\n";
        echo $this->longestCommonPrefix(Samples::getSample2()) . "\n";
    }
    /**
     * @param String[] $words
     * @return String
     */
    function longestCommonPrefix(array $words)
    {
        $prefix = "";
        foreach (str_split($words[0]) as $pos => $char) {
            foreach ($words as $word) {
                if (!$this->charAppearsInWordAtPosition($char, $pos, $word)) {
                    return $prefix;
                }
            }
            $prefix .= $char;
        }

        return $prefix;
    }

    function charAppearsInWordAtPosition(string $char, int $pos, string $word)
    {
        return $char === $word[$pos];
    }
}