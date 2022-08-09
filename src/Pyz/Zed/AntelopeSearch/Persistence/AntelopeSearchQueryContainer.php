<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AntelopeSearch\Persistence;

use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

/**
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchPersistenceFactory getFactory()
 */
class AntelopeSearchQueryContainer extends AbstractQueryContainer implements AntelopeSearchQueryContainerInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return mixed
     */
    public function findAntelope(AntelopeTransfer $antelopeTransfer)
    {
        return $this->getFactory()->getAntelopeSearchQuery()->filterByFkAntelope($antelopeTransfer->getIdAntelope())
            ->findOneOrCreate();
    }
}
