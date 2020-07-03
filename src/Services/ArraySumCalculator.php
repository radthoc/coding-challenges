<?php

namespace CodingChallenge\Services;

class ArraySumCalculator
{
    public function sum(array $array)
    {
        $sum = function ($carry, $item) {
                $carry += $item;
                return $carry;
        };

        return array_reduce($array, $sum);
    }
}
