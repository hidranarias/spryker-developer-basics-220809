<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AntelopeSearch\Business;

use Pyz\Zed\AntelopeSearch\AntelopeSearchDependencyProvider;
use Pyz\Zed\AntelopeSearch\Business\Writer\AntelopeSearchWriter;
use Pyz\Zed\AntelopeSearch\Business\Writer\AntelopeSearchWriterInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchQueryContainerInterface getQueryContainer()
 */
class AntelopeSearchBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @var \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface|\Spryker\Zed\Category\Persistence\CategoryEntityManagerInterface
     */
    protected $antelopeFacade;

    /**
     * @return \Pyz\Zed\AntelopeSearch\Business\Writer\AntelopeSearchWriter
     */
    public function createAntelopeSearchWriter(): AntelopeSearchWriterInterface
    {
        return new AntelopeSearchWriter($this->getAntelopeFacade());
    }

    /**
     * @return mixed
     */
    public function getAntelopeFacade()
    {
        return $this->getProvidedDependency(AntelopeSearchDependencyProvider::ANTELOPE_FACADE);
    }
}
