<?php

namespace test\Services;

use PHPUnit\Framework\TestCase;
use CodingChallenge\Services\GradingStudentsService;

class GradingStudentsServiceTest extends TestCase
{
    /** @dataProvider gradesProvider */
    public function testRoundGrades($grade, $expectedGrade)
    {
        /** @var GradingStudentsService */
        $gradingStudentsService = new GradingStudentsService();

        $this->assertEquals($expectedGrade, $gradingStudentsService->roundGrades($grade));
    }

    public function gradesProvider()
    {
        return [
          [73, 75],
          [67, 67],
          [38, 40],
          [33, 33]
        ];
    }
}
