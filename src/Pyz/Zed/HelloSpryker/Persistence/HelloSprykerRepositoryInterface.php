<?php

namespace Pyz\Zed\HelloSpryker\Persistence;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

interface HelloSprykerRepositoryInterface
{
    /**
     * @param int $idHelloSpryker
     *
     * @return HelloSprykerTransfer|null
     */
    public function findPyzHelloSprykerById(int $idHelloSpryker): ?HelloSprykerTransfer;
}
