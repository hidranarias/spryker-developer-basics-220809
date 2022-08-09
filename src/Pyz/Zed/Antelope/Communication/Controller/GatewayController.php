<?php

namespace Pyz\Zed\Antelope\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    public function findAntelopeAction(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer
    {
        return $this->getFacade()
            ->getAntelope($antelopeCriteria);
    }

    public function createAntelopeAction(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        $antelopeTransfer->setColor('gray');
        return $this->getFacade()
            ->createAntelope($antelopeTransfer);

    }
}
