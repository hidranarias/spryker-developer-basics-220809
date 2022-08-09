<?php

namespace Pyz\Zed\Antelope\Business\Writer;

use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface;

class AntelopeWriter implements AntelopeWriterInterface
{

    /**
     * @var \Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface
     */
    protected AntelopeEntityManagerInterface $antelopeEntityManager;

    public function __construct(AntelopeEntityManagerInterface $antelopeEntityManager)
    {
        $this->antelopeEntityManager = $antelopeEntityManager;
    }

    public function create(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->antelopeEntityManager->createAntelope($antelopeTransfer);
    }

    public function save(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->antelopeEntityManager->saveAntelope($antelopeTransfer);
    }
}
