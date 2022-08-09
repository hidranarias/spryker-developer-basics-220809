<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeTransfer;
use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class HelloController extends AbstractController
{
    public function indexAction(Request $req)
    {
        
        $antelope = new AntelopeTransfer();
        $name = $req->get('antelopename', 'Hidran');
        $antelope->setName($name);
        return $this->viewResponse(
            ['antelope' => $antelope]

        );
    }
}
