<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AntelopeSearch\Business;

interface AntelopeSearchFacadeInterface
{
    /**
     * @param int $idAntelope
     *
     * @return void
     */
    public function publish(int $idAntelope): void;
}
