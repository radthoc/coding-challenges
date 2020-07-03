<?php

namespace CodingChallenge\Services;

class TreeGenerator
{
    /**
     * @param int $company
     * @return array
     */
    public function generateTree(int $company = 0): array
    {
        $tree = $this->getTree($this->getCompanies());

        return $this->getTreeForCompany($tree, $company);
    }

    /**
     * @param int $companies
     * @return array
     */
    private function getTree(array $companies): array
    {
        $tree = [];

        foreach ($companies as $company) {
            $currentCompany = [
              'company' => $company['company'],
              'parent_id' => $company['parent_id'],
            ];

            if ($company['parent_id']) {
                if (isset($tree[$company['parent_id']])) {
                    $tree[$company['parent_id']]['children'][$company['id']] = $currentCompany;
                    continue;
                }

                $tree[$company['parent_id']] = [
                    'children' => $currentCompany
                ];
            } else {
                if (isset($tree[$company['id']])) {
                    $tree[$company['id']]['company'] = $company['company'];
                    $tree[$company['id']]['parent_id'] = $company['parent_id'];
                }

                $tree[$company['id']] = $currentCompany;
            }
        }

        return $tree;
    }

    /**
     * @param array $tree
     * @param int $company
     * @return array
     */
    private function getTreeForCompany($tree, $company): array
    {
        return $tree[$company];
    }

    /**
     * @return array
     */
    private function getCompanies(): array
    {
        return [
            ['id' => 1, 'company' => 'AddAp-tr DE', 'parent_id' => 0],
            ['id' => 5, 'company' => 'LITE - GmbH', 'parent_id' => 1],
            ['id' => 6, 'company' => 'wheem-ware', 'parent_id' => 1],
            ['id' => 2, 'company' => 'the b- GmbH', 'parent_id' => 0],
            ['id' => 3, 'company' => 'TVSMI- GmbH', 'parent_id' => 0],
            ['id' => 7, 'company' => 'TVSMI- GmbH', 'parent_id' => 3],
            ['id' => 8, 'company' => 'Promo-erver', 'parent_id' => 3],
            ['id' => 9, 'company' => 'Gecko-rado', 'parent_id' => 3],
            ['id' => 4, 'company' => 'Salem-rado', 'parent_id' => 3],
            ['id' => 10, 'company' => 'appge-rado', 'parent_id' => 2],
            ['id' => 11, 'company' => 'eniro-rado', 'parent_id' => 2],
            ['id' => 12, 'company' => 'Ineed-rado', 'parent_id' => 3],
        ];
    }
}
