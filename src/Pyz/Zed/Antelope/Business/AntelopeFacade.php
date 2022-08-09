<?php

namespace Pyz\Zed\Antelope\Business;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\Antelope\Business\AntelopeBusinessFactory getFactory()
 * @method \Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface getRepository()
 */
class AntelopeFacade extends AbstractFacade implements AntelopeFacadeInterface
{
    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->getFactory()
            ->createAntelopeWriter()
            ->create($antelopeTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeResponseTransfer
     */
    public function getAntelope(AntelopeCriteriaTransfer $antelopeTransfer): AntelopeResponseTransfer
    {
        return $this->getFactory()
            ->createAntelopeReader()
            ->getAntelope($antelopeTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeResponseTransfer
     */
    public function getAntelopeByName(AntelopeCriteriaTransfer $antelopeTransfer): AntelopeResponseTransfer
    {
        return $this->getFactory()
            ->createAntelopeReader()
            ->getAntelopeByName($antelopeTransfer);
    }
}
