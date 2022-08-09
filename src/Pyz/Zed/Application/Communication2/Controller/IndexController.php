<?php

namespace Pyz\Zed\Application\Communication2\Controller;

use Spryker\Glue\Kernel\Controller\AbstractController;
use Spryker\Zed\Application\Communication\Controller\IndexController as SprykerIndexController;

class IndexController2 extends SprykerIndexController
{
    /**
     * @return string
     */
    public function indexAction(): string
    {
       return 'hello';
    }
}
