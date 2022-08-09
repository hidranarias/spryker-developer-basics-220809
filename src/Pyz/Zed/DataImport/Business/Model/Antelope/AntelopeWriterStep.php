<?php

namespace Pyz\Zed\DataImport\Business\Model\Antelope;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Pyz\Zed\Antelope\Business\AntelopeFacadeInterface;
use Pyz\Zed\Antelope\Dependency\AntelopeEvents;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\PublishAwareStep;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

class AntelopeWriterStep extends PublishAwareStep implements DataImportStepInterface
{

    public const KEY_NAME = 'name';
    public const KEY_COLOR = 'color';
    /**
     * @var \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface
     */
    protected AntelopeFacadeInterface $antelopeFacade;

    public function __construct(AntelopeFacadeInterface $antelopeFacade)
    {
        $this->antelopeFacade = $antelopeFacade;
    }

    /**
     * @param DataSetInterface $dataSet
     *
     *
     * @return void
     */
    public function execute(DataSetInterface $dataSet)
    {
        $antelopeTransfer = new AntelopeCriteriaTransfer();
        $antelopeTransfer->setName($dataSet[static::KEY_NAME]);
        $antelopeResponse = $this->antelopeFacade->getAntelopeByName($antelopeTransfer);

        $antelopeEntity = $this->antelopeFacade->
        $antelopeEntity->setColor($dataSet[static::KEY_COLOR]);

        if ($antelopeEntity->isNew() || $antelopeEntity->isModified()) {
            $antelopeEntity->save();
        }

        $this->addPublishEvents(AntelopeEvents::ENTITY_PYZ_ANTELOPE_CREATE, $antelopeEntity->getIdAntelope());
    }


}
