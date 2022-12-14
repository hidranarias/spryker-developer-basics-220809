<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\Training\Persistence\TrainingRepositoryInterface getRepository()
 *  * @method \Pyz\Zed\Training\TrainingConfig getConfig()
 */
class HelloController extends AbstractController
{
    public function indexAction(Request $req)
    {
        $antelope = new AntelopeTransfer();
        $name = $req->get('antelopename', 'Hidran');
        $antelope->setName($name);

        return $this->viewResponse(
            ['antelope' => $antelope, 'store' => $this->getFactory()->getConfig()->getMyDefaultStore()]
        );
    }
}
