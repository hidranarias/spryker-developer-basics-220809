<?php

namespace Pyz\Zed\Antelope\Persistence\Mapper;

use Generated\Shared\Transfer\AntelopeTransfer;
use Orm\Zed\Antelope\Persistence\Base\PyzAntelope;

/**
 *
 */
class AntelopeMapper implements AntelopeMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     * @param \Orm\Zed\Antelope\Persistence\Base\PyzAntelope $antelope
     *
     * @return \Orm\Zed\Antelope\Persistence\Base\PyzAntelope
     */
    public function mapAntelopeTransferToEntity(AntelopeTransfer $antelopeTransfer, PyzAntelope $antelope): PyzAntelope
    {
        return $antelope->fromArray($antelopeTransfer->toArray());
    }

    /**
     * @param \Orm\Zed\Antelope\Persistence\Base\PyzAntelope $antelopeEntity
     * @param \Generated\Shared\Transfer\AntelopeTransfer|null $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function mapEntityToAntelopeTransfer(PyzAntelope $antelopeEntity, ?AntelopeTransfer $antelopeTransfer = null): AntelopeTransfer
    {
        if ($antelopeTransfer === null) {
            new AntelopeTransfer();
        }
        return $antelopeTransfer->fromArray($antelopeEntity->toArray());
    }
}
