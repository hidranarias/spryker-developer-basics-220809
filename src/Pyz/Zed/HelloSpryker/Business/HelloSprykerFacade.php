<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReserverserTRansfer;
use Generated\Shared\Transfer\StringReverserTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerBusinessFactory getFactory()
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerRepositoryInterface getRepository()
 */
class HelloSprykerFacade extends AbstractFacade implements HelloSprykerFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @param HelloSprykerTransfer $StringReserverserTRansfer
     *
     * @return HelloSprykerTransfer
     * @api
     *
     */
    public function reverseString(StringReverserTransfer $stringReverserTransfer): StringReverserTransfer
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($stringReverserTransfer);
    }

    /**
     * @inheritDoc
     *
     * @param HelloSprykerTransfer $StringReserverserTRansfer
     *
     * @return HelloSprykerTransfer
     * @api
     *
     */
    public function createHelloSprykerEntity(HelloSprykerTransfer $stringReverserTransfer): HelloSprykerTransfer
    {
        return $this->getFactory()->createStringWriter()->createHelloSprykerEntity($stringReverserTransfer);
    }

    /**
     * @inheritDoc
     *
     * @param HelloSprykerTransfer $StringReserverserTRansfer
     *
     * @return HelloSprykerTransfer
     * @api
     *
     */
    public function findHelloSpryker(HelloSprykerTransfer $StringReserverserTRansfer): HelloSprykerTransfer
    {
            return $this->getFactory()->createStringReader()->findHelloSpryker($StringReserverserTRansfer);
    }
}
