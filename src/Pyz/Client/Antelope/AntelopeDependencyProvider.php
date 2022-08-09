<?php

namespace Pyz\Client\Antelope;

use Pyz\Client\Antelope\Plugin\Elasticsearch\ResultFormatter\AntelopeResultFormatterPlugin;
use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

class AntelopeDependencyProvider extends AbstractDependencyProvider
{
    public const CLIENT_SEARCH = 'CLIENT_SEARCH';
    public const ANTELOPE_RESULT_FORMATTER_PLUGINS = 'ANTELOPE_RESULT_FORMATTER_PLUGINS';
    public const CLIENT_ZED_REQUEST = 'CLIENT_ZED_REQUEST';

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     */
    public function provideServiceLayerDependencies(Container $container): Container
    {
        $container = $this->addSearchClient($container);
        $container = $this->addCatalogSearchResultFormatterPlugins($container);
        $container = $this->addZedRequestClient($container);
        return $container;
    }

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     */
    protected function addSearchClient(Container $container): Container
    {
        $container[static::CLIENT_SEARCH] = function (Container $container) {
            return $container->getLocator()->search()->client();
        };

        return $container;
    }

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     */
    public function addCatalogSearchResultFormatterPlugins(Container $container): Container
    {

        $container->set(static::ANTELOPE_RESULT_FORMATTER_PLUGINS, function () {
            return [
                new AntelopeResultFormatterPlugin(),
            ];
        });

        return $container;
    }

    protected function addZedRequestClient(Container $container): Container
    {
        $container->set(static::CLIENT_ZED_REQUEST, function (Container $container) {
            return $container->getLocator()->zedRequest()->client();
        });

        return $container;
    }
}

