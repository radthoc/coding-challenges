<?php

namespace test\Services;

use CodingChallenge\Services\TreeGenerator;
use PHPUnit\Framework\TestCase;

class TreeGeneratorTest extends TestCase
{

    /** @var TreeGenerator */
    private $treeGenerator;

    public function setUp()
    {
        $this->treeGenerator = new TreeGenerator();
    }

    public function testCalculatePhoneBill()
    {
        $company = 3;

        $expectedTree = [
          'company' => 'TVSMI- GmbH',
          'parent_id' => 0,
          'children' => [
            7 => [
              'company' => 'TVSMI- GmbH',
              'parent_id' => 3,
            ],
            8 => [
              'company' => 'Promo-erver',
              'parent_id' => 3,
            ],
            9 => [
              'company' => 'Gecko-rado',
              'parent_id' => 3,
            ],
            4 => [
              'company' => 'Salem-rado',
              'parent_id' => 3,
            ],
            12 => [
              'company' => 'Ineed-rado',
              'parent_id' => 3,
            ],
          ],
        ];

        $actualTree = $this->treeGenerator->generateTree($company);

        $this->assertEquals($expectedTree, $actualTree);
    }
}
