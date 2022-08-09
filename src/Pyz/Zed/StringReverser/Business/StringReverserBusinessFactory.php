<?php

namespace Pyz\Zed\StringReverser\Business;

use Pyz\Zed\StringReverser\Business\Reverser\StringReverser;
use Pyz\Zed\StringReverser\Business\Reverser\StringReverserInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class StringReverserBusinessFactory extends AbstractBusinessFactory
{
    /**
    +     * @return \Pyz\Zed\HelloSpryker\Business\Reader\StringReaderInterface
    +     */
    public function createStringReverser(): StringReverserInterface
    {
        return new StringReverser();
    }
}
