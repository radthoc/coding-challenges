<?php

namespace Services;

use CodingChallenge\Services\ChristmasTree;
use PHPUnit\Framework\TestCase;

class ChristmasTreeTest extends TestCase
{
    public function testGetChristmasTree()
    {
        $christmasTreeGenerator = new ChristmasTree();
        $expectedTree = '   *
  ***
 *****
*******
';

        $this->assertEquals($expectedTree, $christmasTreeGenerator->getChristmasTree(4));
    }
}
