<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AntelopeSearch\Persistence;

use Generated\Shared\Transfer\AntelopeTransfer;

/**
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchPersistenceFactory getFactory()
 */
interface AntelopeSearchQueryContainerInterface
{
    public function findAntelope(AntelopeTransfer $antelopeTransfer);
}
