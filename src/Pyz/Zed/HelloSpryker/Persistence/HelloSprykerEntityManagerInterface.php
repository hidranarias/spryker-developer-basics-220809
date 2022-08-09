<?php

namespace Pyz\Zed\HelloSpryker\Persistence;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

interface HelloSprykerEntityManagerInterface
{
    /**
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     */
    public function saveHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
