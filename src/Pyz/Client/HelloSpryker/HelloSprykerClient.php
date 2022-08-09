<?php

namespace Pyz\Client\HelloSpryker;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\HelloSpryker\HelloSprykerFactory getFactory()
 */
class HelloSprykerClient extends AbstractClient implements HelloSprykerClientInterface
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
    public function reverseString(StringReverserTransfer $helloSprykerTransfer): StringReverserTransfer
    {
        return $this->getFactory()
            ->createHelloSprykerZedStub()
            ->reverseString($helloSprykerTransfer);
    }
}
