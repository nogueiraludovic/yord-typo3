<?php
namespace Nogue\Yord\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/**
 * Class PointRepository
 * @package Nogue\Yord\Domain\Repository
 */
class NumberRepository extends Repository
{

    /**
     * Create query.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\QueryInterface
     */
    public function createQuery()
    {
        $query = parent::createQuery();
        $query->getQuerySettings()
            ->setRespectStoragePage(false)
            ->setRespectSysLanguage(true);

        return $query;
    }
}