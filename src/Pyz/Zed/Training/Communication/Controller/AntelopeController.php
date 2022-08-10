<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\Training\Persistence\TrainingRepositoryInterface getRepository()
 * @method \Pyz\Zed\Training\Business\TrainingFacade getFacade()
 */
class AntelopeController extends AbstractController
{
    public function addAction(Request $req): array
    {
        $antelopeTransfer = new AntelopeTransfer();
        $antelopeTransfer->setName($req->get('antelope', 'Oskar'));
        $antelopeTransfer->setColor('Red');
        $antelopeResponseTransfer = $this->getFacade()
            ->findAntelope((new AntelopeCriteriaTransfer())->setName($antelopeTransfer->getName()));

        if (!$antelopeResponseTransfer->getAntelope()) {
            $antelopeTransfer = $this->getFacade()
                ->createAntelope($antelopeTransfer);
        }

        return $this->viewResponse([
            'antelope' => $antelopeTransfer,
        ]);
    }
}
