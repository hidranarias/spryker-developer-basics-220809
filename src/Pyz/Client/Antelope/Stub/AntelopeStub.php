<?php

namespace Pyz\Client\Antelope\Stub;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;

class AntelopeStub extends ZedRequestStub
{
    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\AntelopeResponseTransfer $antelopeResponseTransfer */
        $antelopeResponseTransfer = $this->zedStub->call('/antelope/gateway/find-antelope', $antelopeCriteria);

        return $antelopeResponseTransfer;
    }

    public function createAntelope(AntelopeTransfer $antelopeCriteria): AntelopeTransfer
    {
        /** @var \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer */
        $antelopeTransfer = $this->zedStub->call('/antelope/gateway/create-antelope', $antelopeCriteria);

        return $antelopeTransfer;
    }
}
