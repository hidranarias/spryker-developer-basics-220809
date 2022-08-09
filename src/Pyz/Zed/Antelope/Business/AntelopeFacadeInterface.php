<?php

namespace Pyz\Zed\Antelope\Business;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;

/**
 * @method \Pyz\Zed\Antelope\Business\AntelopeBusinessFactory getFactory()
 */
interface AntelopeFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer;

    /**
     * @param AntelopeCriteriaTransfer $antelopeTransfer
     *
     * @return AntelopeResponseTransfer
     */
    public function getAntelope(AntelopeCriteriaTransfer $antelopeTransfer): AntelopeResponseTransfer;

    /**
     * @param AntelopeTransfer $antelopeTransfer
     *
     * @return AntelopeTransfer
     */
    public function getAntelopeByName(AntelopeCriteriaTransfer $antelopeTransfer): AntelopeResponseTransfer;
}
