<?php

namespace Pyz\Zed\Antelope\Persistence;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Pyz\Zed\Antelope\Persistence\Mapper\AntelopeMapper;
use Pyz\Zed\Antelope\Persistence\Mapper\AntelopeMapperInterface;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;


/**
 */
class AntelopePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\Antelope\Persistence\PyzAntelopeQuery
     */
    public function createPyzAntelopeQuery(): PyzAntelopeQuery
    {
        return PyzAntelopeQuery::create();
    }

    /**
     * @return \Pyz\Zed\Antelope\Persistence\Mapper\AntelopeMapperInterface
     */
    public function createAntelopeMapper(): AntelopeMapperInterface
    {
        return new AntelopeMapper();
    }
}
