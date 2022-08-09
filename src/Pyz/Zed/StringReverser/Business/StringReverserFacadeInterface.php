<?php

namespace Pyz\Zed\StringReverser\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

interface StringReverserFacadeInterface
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
    public function reverseString(StringReverserTransfer $helloSprykerTransfer): StringReverserTransfer;


}
