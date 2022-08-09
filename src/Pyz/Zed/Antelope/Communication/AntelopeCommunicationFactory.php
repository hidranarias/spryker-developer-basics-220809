<?php


namespace Pyz\Zed\Antelope\Communication;

use Pyz\Zed\Antelope\Communication\Table\AntelopeTable;
use Pyz\Zed\Antelope\Persistence\AntelopeQueryContainerInterface;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

/**
 * @method AntelopeQueryContainerInterface getQueryContainer()
 */
class AntelopeCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return AntelopeTable
     */
    public function createAntelopeTable(): AntelopeTable
    {
        return new AntelopeTable(
            $this->getQueryContainer()
        );
    }
}
