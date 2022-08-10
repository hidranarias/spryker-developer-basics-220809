<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @api
     */
    public function findAntelopeAction(AntelopeCriteriaTransfer $antelopeCriteria)
    {
        return $this->getFacade()
            ->findAntelope($antelopeCriteria);
    }

    /**
     * @api
     */
    public function createAntelopeAction(AntelopeTransfer $antelopeTransfer)
    {
        return $this->getFacade()
            ->createAntelope($antelopeTransfer);
    }
}
