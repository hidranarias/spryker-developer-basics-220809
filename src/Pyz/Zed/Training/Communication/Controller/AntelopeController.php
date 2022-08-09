<?php


namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class AntelopeController extends AbstractController
{


    public function addAction(Request $req)
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
