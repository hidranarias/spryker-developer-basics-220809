<?php

namespace Pyz\Zed\Antelope\Persistence;

use Generated\Shared\Transfer\AntelopeTransfer;
use Orm\Zed\Antelope\Persistence\PyzAntelope;

/**
 * @method \Pyz\Zed\Antelope\Persistence\AntelopePersistenceFactory getFactory()
 */
class AntelopeEntityManager extends \Spryker\Zed\Kernel\Persistence\AbstractEntityManager implements AntelopeEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function saveAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        $pyzAntelope = $this->getFactory()->createPyzAntelopeQuery()
            ->filterByIdAntelope($antelopeTransfer->getIdAntelope())
            ->findOneOrCreate();
        $pyzAntelope = $this->getFactory()->createAntelopeMapper()
            ->mapAntelopeTransferToEntity($antelopeTransfer, $pyzAntelope);
        $pyzAntelope->save();

        return $this->getFactory()->createAntelopeMapper()
            ->mapEntityToAntelopeTransfer($pyzAntelope, $antelopeTransfer);
    }

    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        $antelopeEntity = new PyzAntelope();


        $antelopeEntity->fromArray($antelopeTransfer->modifiedToArray());
      
        $antelopeEntity->save();

        return $antelopeTransfer->fromArray($antelopeEntity->toArray(), true);
    }
}
