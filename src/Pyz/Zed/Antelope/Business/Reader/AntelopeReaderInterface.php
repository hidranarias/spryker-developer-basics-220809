<?php

namespace Pyz\Zed\Antelope\Business\Reader;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;

/**
 *
 */
interface AntelopeReaderInterface
{
    /**
     * @param AntelopeCriteriaTransfer $antelopeTransfer
     *
     * @return AntelopeTransfer|null
     */
    public function getAntelope(AntelopeCriteriaTransfer $antelopeTransfer): AntelopeResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeResponseTransfer
     */
    public function getAntelopeByName(AntelopeCriteriaTransfer $antelopeTransfer): AntelopeResponseTransfer;

}
