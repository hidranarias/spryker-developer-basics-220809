<?php

namespace Pyz\Zed\StringReverser\Business\Reverser;



use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

class StringReverser implements StringReverserInterface
{

    /**
     * @inheritDoc
     */
    public function reverseString(StringReverserTransfer $helloSprykerTransfer): StringReverserTransfer
    {
        $str = strrev($helloSprykerTransfer->getOriginalString());
        $helloSprykerTransfer->setReversedString($str);
        return $helloSprykerTransfer;
    }
}
