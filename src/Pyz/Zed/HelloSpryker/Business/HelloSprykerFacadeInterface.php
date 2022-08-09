<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReserverserTRansfer;
use Generated\Shared\Transfer\StringReverserTransfer;

interface HelloSprykerFacadeInterface
{
    /**
     * Specification:
     * - Reverses string.
     *
     * @param HelloSprykerTransfer $StringReserverserTRansfer
     *
     * @return HelloSprykerTransfer
     * @api
     *
     */
    public function reverseString(StringReverserTransfer $StringReserverserTRansfer): StringReverserTransfer;

    /**
     * Specification:
     * - Creates a database record
     *
     * @param HelloSprykerTransfer $StringReserverserTRansfer
     *
     * @return HelloSprykerTransfer
     * @api
     *
     */
    public function createHelloSprykerEntity(HelloSprykerTransfer $StringReserverserTRansfer): HelloSprykerTransfer;

    /**
     * Specification:
     * - Finds a record in database
     *
     * @param HelloSprykerTransfer $StringReserverserTRansfer
     *
     * @return HelloSprykerTransfer
     * @api
     *
     */
    public function findHelloSpryker(HelloSprykerTransfer $StringReserverserTRansfer): HelloSprykerTransfer;
}
