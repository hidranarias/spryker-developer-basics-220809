<?php

namespace Pyz\Client\Antelope;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\Antelope\AntelopeFactory getFactory()
 */
class AntelopeClient extends AbstractClient implements AntelopeClientInterface
{
    /**
     * @param string $name
     *
     * @return AntelopeTransfer
     */
    public function getAntelopeByName(string $name): ?AntelopeTransfer
    {
        $searchQuery = $this->getFactory()
            ->createAntelopeQueryPlugin($name);

        $resultFormatters = $this->getFactory()
            ->getSearchQueryFormatters();

        $searchResults = $this->getFactory()
            ->getSearchClient()
            ->search(
                $searchQuery,
                $resultFormatters
            );

        $res = $searchResults['antelope'] ? $searchResults['antelope'][0] : [];

        $result = (new AntelopeTransfer())->fromArray($res);
        return $result;
    }

    /**
     *
     * @return array<AntelopeTransfer>
     */
    public function getAntelopes(): array
    {
        $searchQuery = $this->getFactory()
            ->createAntelopeQueryPlugin();

        $resultFormatters = $this->getFactory()
            ->getSearchQueryFormatters();

        $searchResults = $this->getFactory()
            ->getSearchClient()
            ->search(
                $searchQuery,
                $resultFormatters
            );

        return $searchResults['antelope'] ?? [];
    }

    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopeResponseTransfer
    {
        return $this->getFactory()
            ->createAntelopeStub()
            ->findAntelope($antelopeCriteriaTransfer);
    }

    public function createAntelope(AntelopeTransfer $antelopeCriteriaTransfer): AntelopeTransfer
    {
        return $this->getFactory()
            ->createAntelopeStub()
            ->createAntelope($antelopeCriteriaTransfer);
    }
}
