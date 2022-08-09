<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AntelopeSearch\Business\Writer;

use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Antelope\Business\AntelopeFacadeInterface;
use Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchQueryContainerInterface;

class AntelopeSearchWriter implements AntelopeSearchWriterInterface
{
    /**
     * @var \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface
     */
    protected AntelopeFacadeInterface $antelopeFacade;

    /**
     * @var \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchQueryContainerInterface
     */
    protected AntelopeSearchQueryContainerInterface $antelopeSearchQueryContainer;

    /**
     * @param \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface $antelopeFacade
     */
    public function __construct(
        AntelopeFacadeInterface $antelopeFacade,
        AntelopeSearchQueryContainerInterface $antelopeSearchQueryContainer
    ) {
        $this->antelopeFacade = $antelopeFacade;
        $this->antelopeSearchQueryContainer = $antelopeSearchQueryContainer;
    }

    /**
     * @param int $idAntelope
     *
     * @return void
     * PropelException
     */
    public function publish(int $idAntelope): void
    {
        $antelopeTransfer = new AntelopeTransfer();
        $antelopeTransfer->setIdAntelope($idAntelope);
        $antelopeTransfer = $this->antelopeFacade->getAntelope($antelopeTransfer);

        $searchEntity = $this->antelopeSearchQueryContainer
            ->findAntelope($antelopeTransfer);
        $searchEntity->setFkAntelope($idAntelope);
        $searchEntity->setData($antelopeTransfer->toArray());

        $searchEntity->save();
    }
}
