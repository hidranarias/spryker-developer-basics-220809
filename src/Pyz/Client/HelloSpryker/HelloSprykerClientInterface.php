<?php

namespace Pyz\Client\HelloSpryker;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

interface HelloSprykerClientInterface
{
    /**
     * Specification:
     * - Does Zed call.
     * - Reverses string.
     *
     * @api
     *
     * @param StringReverserTransfer $helloSprykerTransfer
     *
     * @return StringReverserTransfer
     */
    public function reverseString(StringReverserTransfer $helloSprykerTransfer): StringReverserTransfer;


}
