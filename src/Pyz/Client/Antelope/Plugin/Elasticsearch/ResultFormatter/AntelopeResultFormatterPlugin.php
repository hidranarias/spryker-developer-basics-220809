<?php

namespace Pyz\Client\Antelope\Plugin\Elasticsearch\ResultFormatter;

use Elastica\ResultSet;
use Spryker\Client\SearchElasticsearch\Plugin\ResultFormatter\AbstractElasticsearchResultFormatterPlugin;

class AntelopeResultFormatterPlugin extends AbstractElasticsearchResultFormatterPlugin
{
    public const NAME = 'antelope';

    /**
     * @return string
     */
    public function getName(): string
    {
        return static::NAME;
    }

    /**
     * @param \Elastica\ResultSet $searchResult
     * @param array $requestParameters
     *
     * @return array
     */
    protected function formatSearchResult(ResultSet $searchResult, array $requestParameters): array
    {
        $res = [];
        foreach ($searchResult->getResults() as $document) {
            $res[] = $document->getSource();
        }

        return $res;
    }
}
