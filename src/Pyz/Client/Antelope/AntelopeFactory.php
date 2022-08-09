<?php

namespace Pyz\Client\Antelope;

use Pyz\Client\Antelope\Plugin\Elasticsearch\Query\AntelopeQueryPlugin;
use Pyz\Client\Antelope\Stub\AntelopeStub;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class AntelopeFactory extends AbstractFactory
{
    /**
     * @param string|null $name
     *
     * @return \Pyz\Client\Antelope\Plugin\Elasticsearch\Query\AntelopeQueryPlugin
     */
    public function createAntelopeQueryPlugin(?string $name = null): AntelopeQueryPlugin
    {
        return new AntelopeQueryPlugin($name);
    }

    /**
     * @return mixed
     */
    public function getSearchQueryFormatters(): array
    {
        return $this->getProvidedDependency(AntelopeDependencyProvider::ANTELOPE_RESULT_FORMATTER_PLUGINS);
    }

    /**
     * @return \Spryker\Client\Search\SearchClientInterface
     */
    public function getSearchClient(): \Spryker\Client\Search\SearchClientInterface
    {
        return $this->getProvidedDependency(AntelopeDependencyProvider::CLIENT_SEARCH);
    }


    public function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(AntelopeDependencyProvider::CLIENT_ZED_REQUEST);
    }

    public function createAntelopeStub(): AntelopeStub
    {
        return new AntelopeStub($this->getZedRequestClient());
    }
}
