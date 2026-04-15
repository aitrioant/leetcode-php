<?php

class Samples
{
    public static function getSample1()
    {
        return [
            "words" => ["hello", "i", "am", "leetcode", "hello"],
            "target" => "hello",
            "startIndex" => 1,
        ];
    }

    public static function getSample2()
    {
        return [
            "words" => ["a", "b", "leetcode"],
            "target" => "leetcode",
            "startIndex" => 0,
        ];
    }

    public static function getSample3()
    {
        return [
            "words" => ["i", "eat", "leetcode"],
            "target" => "ate",
            "startIndex" => 0,
        ];
    }

    public static function getSample4()
    {
        return [
            "words" => ["ibkgecmeyx","jsdkekkjsb","gdjgdtjtrs","jsdkekkjsb","jsdkekkjsb","jsdkekkjsb","gdjgdtjtrs","msjlfpawbx","pbgjhutcwb","gdjgdtjtrs"],
            "target" => "pbgjhutcwb",
            "startIndex" => 0,
        ];
    }
}