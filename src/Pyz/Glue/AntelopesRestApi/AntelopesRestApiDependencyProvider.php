<?php

namespace Pyz\Glue\AntelopesRestApi;

use Spryker\Glue\Kernel\AbstractBundleDependencyProvider;
use Spryker\Glue\Kernel\Container;

/**
 * @method \Pyz\Glue\AntelopesRestApi\AntelopesRestApiConfig getConfig()
 */
class AntelopesRestApiDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_ANTELOPE = 'CLIENT_ANTELOPE';

    public function provideDependencies(Container $container): Container
    {
        $container = parent::provideDependencies($container);

        return $this->addAntelopeClient($container);
    }

    protected function addAntelopeClient(Container $container): Container
    {

        $container->set(static::CLIENT_ANTELOPE, function (Container $container) {
            return $container->getLocator()->antelope()->client();
        });

        return $container;
    }
}
