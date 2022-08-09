<?php


namespace Pyz\Zed\Antelope\Communication\Table;

use Orm\Zed\Antelope\Persistence\Map\PyzAntelopeTableMap;
use Orm\Zed\Antelope\Persistence\PyzAntelope;
use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Propel\Runtime\Collection\ObjectCollection;
use Pyz\Zed\Antelope\Persistence\AntelopeQueryContainerInterface;
use Spryker\Zed\Gui\Communication\Table\AbstractTable;
use Spryker\Zed\Gui\Communication\Table\TableConfiguration;

class AntelopeTable extends AbstractTable
{
    public const ACTIONS = 'actions';

    public const COL_ID_ANTELOPE = 'id_antelope';
    public const COL_NAME = 'name';
    public const COL_COLOR = 'color';

    /**
     * @var AntelopeQueryContainerInterface
     */
    protected AntelopeQueryContainerInterface $antelopeQueryContainer;

    /**
     * @param AntelopeQueryContainerInterface $antelopeQueryContainer
     */
    public function __construct(AntelopeQueryContainerInterface $antelopeQueryContainer)
    {
        $this->antelopeQueryContainer = $antelopeQueryContainer;
    }

    /**
     * @param TableConfiguration $config
     *
     * @return TableConfiguration
     */
    protected function configure(TableConfiguration $config): TableConfiguration
    {
        $config->setHeader([
            static::COL_ID_ANTELOPE => '#',
            static::COL_NAME => 'Name',
            static::COL_COLOR => 'Color',
            static::ACTIONS => self::ACTIONS,
        ]);

        $config->addRawColumn(self::ACTIONS);

        $config->setSortable([
            static::COL_ID_ANTELOPE,
            static::COL_NAME,
            static::COL_COLOR,
        ]);

        $config->setSearchable([
            PyzAntelopeTableMap::COL_NAME,
            PyzAntelopeTableMap::COL_COLOR,
        ]);

        return $config;
    }

    /**
     * @param TableConfiguration $config
     *
     * @return array
     */
    protected function prepareData(TableConfiguration $config): array
    {
        $query = $this->prepareQuery();

        /** @var ObjectCollection|PyzAntelope[] $antelopeCollection */
        $antelopeCollection = $this->runQuery($query, $config, true);

        if ($antelopeCollection->count() < 1) {
            return [];
        }

        return $this->mapAntelopeCollection($antelopeCollection);
    }

    /**
     * @param PyzAntelope $antelope
     *
     * @return string
     */
    protected function buildLinks(PyzAntelope $antelope): string
    {
        $buttons = [];
        $buttons[] = $this->generateViewButton(
            sprintf('/antelope/view?id-antelope=%d', $antelope->getIdAntelope()),
            'View'
        );

        return implode(' ', $buttons);
    }

    /**
     * @param ObjectCollection|PyzAntelope[] $antelopeCollection
     *
     * @return array<array<string,string>>
     */
    protected function mapAntelopeCollection(ObjectCollection $antelopeCollection): array
    {
        $antelopeList = [];

        foreach ($antelopeCollection as $antelopeEntity) {
            $antelopeList[] = $this->mapAntelopeRow($antelopeEntity);
        }

        return $antelopeList;
    }

    /**
     * @param PyzAntelope $antelopeEntity
     *
     * @return array<string,string>
     */
    protected function mapAntelopeRow(PyzAntelope $antelopeEntity): array
    {
        $antelopeRow = $antelopeEntity->toArray();

        $antelopeRow[static::COL_ID_ANTELOPE] = $antelopeEntity->getIdAntelope();
        $antelopeRow[static::COL_NAME] = $antelopeEntity->getName();
        $antelopeRow[static::COL_COLOR] = $antelopeEntity->getColor();

        $antelopeRow[static::ACTIONS] = $this->buildLinks($antelopeEntity);

        return $antelopeRow;
    }

    /**
     * @return PyzAntelopeQuery
     */
    protected function prepareQuery(): PyzAntelopeQuery
    {
        return $this->antelopeQueryContainer->queryAntelopes();
    }
}
