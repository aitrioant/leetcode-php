<?php

class Problem20
{
    public function run()
    {
        $samples = [
            Samples::getSample1(),
            Samples::getSample2(),
            Samples::getSample3(),
            Samples::getSample4(),
            Samples::getSample5(),
        ];

        foreach ($samples as $sample) {
            echo "Is valid: " . ($this->isValid($sample) ? "true" : "false") . "\n";
        }
    }

    const PARENTHESIS = [
        ")" => "(",
        "}" => "{",
        "]" => "[",
    ];

    private array $opennedParenthesis = [];

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s): bool
    {
        $this->opennedParenthesis = [];
        foreach (str_split($s) as $parenthesis) {
            if ($this->isCloseParenthesis($parenthesis)) {
                if (!$this->hasBeenOpenned($parenthesis)) {
                    return false;
                } else {
                    array_pop($this->opennedParenthesis);
                }
            }

            if ($this->isOpenParenthesis($parenthesis)) {
                $this->opennedParenthesis[] = $parenthesis;
            }
        }
        return count($this->opennedParenthesis) === 0;
    }

    function isOpenParenthesis(string $parenthesis): bool
    {
        return in_array($parenthesis, $this->openParenthesis());
    }

    function isCloseParenthesis(string $parenthesis): bool
    {
        return in_array($parenthesis, $this->closeParenthesis());
    }

    function hasBeenOpenned(string $closeParenthesis): bool
    {
        $openParenthesis = self::PARENTHESIS[$closeParenthesis];

        return end($this->opennedParenthesis) === $openParenthesis;
    }

    function openParenthesis(): array
    {
        return array_values(self::PARENTHESIS);
    }

    function closeParenthesis(): array
    {
        return array_keys(self::PARENTHESIS);
    }
}