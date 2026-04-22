<?php

class Problem5
{
    public function run()
    {
        $samples = [Samples::getSample1(), Samples::getSample2()];
        foreach ($samples as $sample) {
            $result = $this->longestPalindrome($sample);
            echo $result . PHP_EOL;

        }

    }

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome(string $s): string
    {
        $left = 0;
        $palindrome = "";
        // fix for odd numbers
        for ($right = 1; $right < strlen($s); $right++) {
            $substr = substr($s, $left, $right - $left + 1);
            if (!$this->isPalindrome($substr)) {
                if(strlen($substr)%2 === 1){
                    $left++;
                    $right--;
                }
            } else {
                $left--;
                $palindrome = $substr;
            }
        }

        return $palindrome;
    }

    function isPalindrome(string $s): bool
    {
        //compare only the first and last characters if string is longer than 2
        $right = strlen($s) - 1;

        foreach (str_split($s) as $char) {
            if ($char !== $s[$right]) {
                return false;
            }

            $right--;
        }

        return true;
    }

}