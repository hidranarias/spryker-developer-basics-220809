<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AntelopeSearch\Persistence;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchQueryContainerInterface getQueryContainer()
 */
class AntelopeSearchPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\Antelope\Persistence\PyzAntelopeQuery
     */
    public function getAntelopeSearchQuery(): PyzAntelopeQuery
    {
        return PyzAntelopeQuery::create();
    }
}
