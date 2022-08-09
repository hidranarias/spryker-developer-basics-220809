<?php

namespace Pyz\Zed\Antelope\Business\Reader;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface;

class AntelopeReader implements AntelopeReaderInterface
{
    /**
     * @var AntelopeRepositoryInterface
     */
    protected AntelopeRepositoryInterface $antelopeRepository;

    /**
     * @param AntelopeRepositoryInterface $antelopeRepository
     */
    public function __construct(AntelopeRepositoryInterface $antelopeRepository)
    {
        $this->antelopeRepository = $antelopeRepository;
    }

    /**
     * @inheriDoc
     */
    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopeResponseTransfer
    {
        $antelopeTransfer = $this->antelopeRepository->findAntelope($antelopeCriteriaTransfer);
        $antelopeResponseTransfer = new AntelopeResponseTransfer();
        $antelopeResponseTransfer->setIsSuccessful(false);
        if ($antelopeTransfer) {
            $antelopeResponseTransfer->setAntelope($antelopeTransfer);
            $antelopeResponseTransfer->setIsSuccessful(true);
        }
        return $antelopeResponseTransfer;
    }

    /**
     * @inheriDoc
     */
    public function getAntelopeByName(AntelopeCriteriaTransfer $antelopeTransfer): AntelopeResponseTransfer
    {
        $antelopeTransfer = $this->antelopeRepository->findAntelopeByName($antelopeTransfer->getName());
        $antelopeResponseTransfer = new AntelopeResponseTransfer();
        $antelopeResponseTransfer->setIsSuccessful(false);
        if ($antelopeTransfer) {
            $antelopeResponseTransfer->setAntelope($antelopeTransfer);
            $antelopeResponseTransfer->setIsSuccessful(true);
        }
        return $antelopeResponseTransfer;
    }
}
