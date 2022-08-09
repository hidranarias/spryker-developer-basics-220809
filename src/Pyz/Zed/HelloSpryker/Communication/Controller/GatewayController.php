<?php

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

class GatewayController extends AbstractGatewayController
{
    /**
     * @param StringReverserTransfer $helloSprykerTransfer
     *
     * @return StringReverserTransfer
     */
    public function reverseStringAction(StringReverserTransfer $helloSprykerTransfer): StringReverserTransfer
    {
        return $this->getFacade()->reverseString($helloSprykerTransfer);
    }
}
