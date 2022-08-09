<?php

namespace Pyz\Yves\CustomerPage\Form\Transformer;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Client\Antelope\AntelopeClientInterface;
use Symfony\Component\Form\DataTransformerInterface;

class AntelopeTransformer implements DataTransformerInterface
{
    protected $antelopeClient;

    public function __construct(AntelopeClientInterface $antelopeClient)
    {
        $this->antelopeClient = $antelopeClient;
    }

    public function transform($value)
    {
        if (!$value) {
            return '';
        }

        $antelopeResponseTransfer = $this->antelopeClient
            ->getAntelope((new AntelopeCriteriaTransfer())->setIdAntelope($value));

        if (!$antelopeResponseTransfer->getAntelope()) {
            return '';
        }

        return $antelopeResponseTransfer->getAntelope()->getName();
    }

    public function reverseTransform($value)
    {
        if (!$value) {
            return null;
        }

        $antelopeCriteriaTransfer = (new AntelopeCriteriaTransfer())->setName($value);

        $antelopeResponseTransfer = $this->antelopeClient
            ->getAntelope($antelopeCriteriaTransfer);
       
        if ($antelopeResponseTransfer->getAntelope()) {
            return $antelopeResponseTransfer->getAntelope()->getIdAntelope();
        }

        $antelopeTransfer = new AntelopeTransfer();
        $antelopeTransfer->setName($value);

        return $this->antelopeClient
            ->createAntelope($antelopeTransfer)->getIdAntelope();
    }
}
