<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AntelopeSearch\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\AntelopeSearch\Business\AntelopeSearchBusinessFactory getFactory()
 */
class AntelopeSearchFacade extends AbstractFacade implements AntelopeSearchFacadeInterface
{
    /**
     * @api
     *
     * @param int $idAntelope
     *
     * @throws PropelException|AmbiguousComparisonException
     *
     * @return void
     */
    public function publish(int $idAntelope): void
    {
        $this->getFactory()
            ->createAntelopeSearchWriter()
            ->publish($idAntelope);
    }
}
