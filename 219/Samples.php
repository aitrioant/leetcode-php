<?php

class Samples
{
    public static function getSample1(): array
    {
        return ['nums' => [1, 2, 3, 1], 'k' => 3];
    }

    public static function getSample2(): array
    {
        return ['nums' => [1, 0, 1, 1], 'k' => 1];
    }

    public static function getSample3(): array
    {
        return ['nums' => [1, 2, 3, 1, 2, 3], 'k' => 2];
    }
}