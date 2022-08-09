<?php

namespace Pyz\Glue\AntelopesRestApi\Processor\Mapper;

use Generated\Shared\Transfer\AntelopeTransfer;
use Generated\Shared\Transfer\RestAntelopesAttributesTransfer;

class AntelopesResourceMapper implements AntelopesResourceMapperInterface
{
    public function mapAntelopeDataToAntelopeRestAttributes(AntelopeTransfer $antelopeData): RestAntelopesAttributesTransfer
    {


        $restAntelopesAttributesTransfer = new RestAntelopesAttributesTransfer();
        $restAntelopesAttributesTransfer->setColor($antelopeData->getColor());
        $restAntelopesAttributesTransfer->setName($antelopeData->getName());

        return $restAntelopesAttributesTransfer;
    }
}

