<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Training\Persistence;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\Training\Persistence\TrainingPersistenceFactory getFactory()
 */
class TrainingRepository extends AbstractRepository implements TrainingRepositoryInterface
{
    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): ?AntelopeTransfer
    {
        $antelopeQuery = $this->getFactory()
            ->createAntelopeQuery();
        $id_antelope = $antelopeCriteria->getIdAntelope();
        $name = $antelopeCriteria->getName();
        if ($id_antelope !== null) {
            $antelopeQuery = $antelopeQuery->findByIdAntelope($id_antelope);
        } elseif ($name !== null) {
            $antelopeQuery = $antelopeQuery->findByName($name);
        }
        $antelopeEntity = $antelopeQuery->findOne();

        if (!$antelopeEntity) {
            return null;
        }

        $antelopeTransfer = new AntelopeTransfer();

        return $antelopeTransfer->fromArray($antelopeEntity->toArray(), true);
    }
}
