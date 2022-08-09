<?php

namespace Pyz\Zed\Antelope\Persistence\Mapper;

use Generated\Shared\Transfer\AntelopeTransfer;
use Orm\Zed\Antelope\Persistence\Base\PyzAntelope;

/**
 *
 */
interface AntelopeMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     * @param \Orm\Zed\Antelope\Persistence\Base\PyzAntelope $antelope
     *
     * @return \Orm\Zed\Antelope\Persistence\Base\PyzAntelope
     */
    public function mapAntelopeTransferToEntity(AntelopeTransfer $antelopeTransfer, PyzAntelope $antelope): PyzAntelope;

    /**
     * @param \Orm\Zed\Antelope\Persistence\Base\PyzAntelope $antelope
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function mapEntityToAntelopeTransfer(PyzAntelope $antelope, AntelopeTransfer $antelopeTransfer): AntelopeTransfer;
}
