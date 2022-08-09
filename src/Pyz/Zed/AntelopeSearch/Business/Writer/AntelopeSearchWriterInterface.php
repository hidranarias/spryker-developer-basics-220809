<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AntelopeSearch\Business\Writer;

interface AntelopeSearchWriterInterface
{
    /**
     * @param int $idAntelope
     *
     * @return void
     * PropelException
     */
    public function publish(int $idAntelope): void;
}
