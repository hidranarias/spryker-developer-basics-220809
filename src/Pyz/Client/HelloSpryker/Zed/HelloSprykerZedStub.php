<?php

namespace Pyz\Client\HelloSpryker\Zed;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class HelloSprykerZedStub implements HelloSprykerZedStubInterface
{
    protected ZedRequestClientInterface $zedRequestClient;

    public function __construct(ZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @inheritDoc
     */
    public function reverseString(StringReverserTransfer $helloSprykerTransfer): StringReverserTransfer
    {
        /**
         * @var HelloSprykerTransfer $helloSprykerTransfer
         *
         */
                $helloSprykerTransfer = $this->zedRequestClient->call('/hello-spryker/gateway/reverse-string', $helloSprykerTransfer);

               return $helloSprykerTransfer;
    }
}
