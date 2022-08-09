<?php

namespace Pyz\Zed\ApplicationAT\Communication\Controller;

use Spryker\Zed\Application\Communication\Controller\IndexController as SprykerIndexController;

class IndexController extends SprykerIndexController
{
    /**
     * @return string
     */
    public function indexAction()
    {
        return $this->viewResponse( ['string'=>'Hello AT Store!']);
    }
}
