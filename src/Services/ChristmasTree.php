<?php


namespace CodingChallenge\Services;

class ChristmasTree
{
    /**
     * @param int $height
     * @return string
     */
    public function getChristmasTree(int $height): string
    {
        $tree = '';
        $offset = 0;
        $branches = 1;

        for ($row = 1; $row <= $height; $row++) {
            $spaces = $height - $row;
            $tree .= $this->getRow($spaces, $branches);
            $branches += 2;
        }

        return $tree;
    }

    private function getRow(int $spaces, int $leaves): string
    {
        $row = '';

        return str_repeat(' ', $spaces) . str_repeat('*', $leaves) . PHP_EOL;
    }
}
