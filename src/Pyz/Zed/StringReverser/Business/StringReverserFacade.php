<?php

namespace Pyz\Zed\StringReverser\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

class StringReverserFacade  extends AbstractFacade implements StringReverserFacadeInterface
{

    /**
     * {@inheritDoc}
     *
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     * @api
     *
     */
    public function reverseString(StringReverserTransfer $helloSprykerTransfer): StringReverserTransfer
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($helloSprykerTransfer);
    }

}
