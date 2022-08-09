<?php

namespace Pyz\Client\HelloSpryker\Zed;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

interface HelloSprykerZedStubInterface
{
    /**
     * @param StringReverserTransfer $helloSprykerTransfer
     *
     * @return StringReverserTransfer
     */
    public function reverseString(StringReverserTransfer $helloSprykerTransfer): StringReverserTransfer;
}
