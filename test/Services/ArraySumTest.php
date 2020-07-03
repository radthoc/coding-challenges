<?php

namespace test\Services;

use PHPUnit\Framework\TestCase;
use CodingChallenge\Services\ArraySumCalculator;

class ArraySumTest extends TestCase
{
    public function testArraySumCalculator()
    {
        /** @var ArraySumCalculator */
        $arraySumCalculator = new ArraySumCalculator();

        $array = [1, 2, 3, 4, 10, 11];
        $expectedValue = 31;

        $this->assertEquals($expectedValue, $arraySumCalculator->sum($array));
    }
}
