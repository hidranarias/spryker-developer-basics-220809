<?php

namespace Pyz\Zed\HelloSpryker\Business\Reader;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

interface StringReaderInterface
{
    /**
     * @param StringReverserTransfer $helloSprykerTransfer
     *
     * @return StringReverserTransfer
     */
    public function findHelloSpryker(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
