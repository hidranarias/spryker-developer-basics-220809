<?php
namespace Pyz\Zed\StringReverser\Business\Reverser;



use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

interface StringReverserInterface

{
    /**
     * @param string $stringToReverse
     *
     * @return string
     */
    public function reverseString(StringReverserTransfer $helloSprykerTransfer): StringReverserTransfer;

}
