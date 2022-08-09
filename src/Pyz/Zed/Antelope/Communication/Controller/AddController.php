<?php

namespace Pyz\Zed\Antelope\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface getFacade()
 */
class AddController extends AbstractController
{
    protected const ANTELOPE_NAME = 'name';

    public function indexAction(Request $request): array
    {
        $antelopeTransfer = new AntelopeTransfer();
        $antelopeTransfer->setName($request->get(static::ANTELOPE_NAME, 'Oskar'));

        $antelopeResponseTransfer = $this->getFacade()
            ->getAntelopeByName((new AntelopeCriteriaTransfer())->setName($antelopeTransfer->getName()));

        if (!$antelopeResponseTransfer->getAntelope()) {
            $antelopeTransfer->setColor('red');
            $antelopeTransfer = $this->getFacade()
                ->createAntelope($antelopeTransfer);
        }

        return $this->viewResponse([
            'antelope' => $antelopeTransfer,
        ]);
    }
}
