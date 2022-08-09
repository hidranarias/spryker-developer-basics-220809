<?php

namespace Pyz\Zed\Antelope\Persistence;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\Antelope\Persistence\AntelopePersistenceFactory getFactory()
 */
class AntelopeRepository extends AbstractRepository implements AntelopeRepositoryInterface
{
    /**
     * @param int $idAntelope
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer|null
     */
    public function findAntelopeById(int $idAntelope): ?AntelopeTransfer
    {
        $antelopeEntity = $this->getFactory()
            ->createPyzAntelopeQuery()
            ->findOneByIdAntelope($idAntelope);

        if ($antelopeEntity === null) {
            return null;
        }

        $antelopeTransfer = new AntelopeTransfer();

        return $this->getFactory()->createAntelopeMapper()->mapEntityToAntelopeTransfer($antelopeEntity, $antelopeTransfer);
    }

    /**
     * @param string $name
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer|null
     */
    public function findAntelopeByName(string $name): ?AntelopeTransfer
    {
        $antelopeEntity = $this->getFactory()
            ->createPyzAntelopeQuery()
            ->findOneByName($name);

        if ($antelopeEntity === null) {
            return null;
        }

        $antelopeTransfer = new AntelopeTransfer();

        return $antelopeTransfer->fromArray($antelopeEntity->toArray());
    }

    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): ?AntelopeTransfer
    {


        if ($antelopeCriteria->getIdAntelope() === null && $antelopeCriteria->getName() === null) {
            return null;
        }
        if ($antelopeCriteria->getIdAntelope() !== null) {
            return $this->findAntelopeById($antelopeCriteria->getIdAntelope());
        }

        return $this->findAntelopeByName($antelopeCriteria->getName());


    }
}
