<?php

namespace Pyz\Zed\Antelope\Persistence;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;

interface AntelopeQueryContainerInterface
{
    /**
     * @return PyzAntelopeQuery
     */
    public function queryAntelopes(): PyzAntelopeQuery;

}
