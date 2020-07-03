<?php

namespace CodingChallenge\Services;

class GradingStudentsService
{
    const FAILED_GRADE = 38;
    const ROUND_FACTOR = 5;
    const DIFFERENCE_TO_ROUND = 3;

    public function roundGrades(int $grade): int
    {
        if ($grade < self::FAILED_GRADE) {
            return $grade;
        }

        $nextMultipleOfFive = $this->getNextMultipleOfFive($grade);

        if (($nextMultipleOfFive - $grade) < self::DIFFERENCE_TO_ROUND) {
            return $nextMultipleOfFive;
        }

        return $grade;
    }

    private function getNextMultipleOfFive(int $grade): int
    {
        return ceil($grade/self::ROUND_FACTOR) * self::ROUND_FACTOR;
    }
}
