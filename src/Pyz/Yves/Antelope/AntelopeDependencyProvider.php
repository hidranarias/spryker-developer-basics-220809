<?php

namespace Pyz\Yves\Antelope;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;

class AntelopeDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_ANTELOPE = 'CLIENT_ANTELOPE';

    public const CLIENT_STORE = 'CLIENT_STORE';

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    public function provideDependencies(Container $container): Container
    {
        $container = $this->addAntelopeClient($container);
        $container = $this->addStoreClient($container);

        return $container;
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    protected function addAntelopeClient(Container $container): Container
    {
        $container->set(static::CLIENT_ANTELOPE, function (Container $container) {
            return $container->getLocator()->antelope()->client();
        });

        return $container;
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    protected function addStoreClient(Container $container)
    {
        $container->set(static::CLIENT_STORE, function (Container $container) {
            return $container->getLocator()->store()->client();
        });

        return $container;
    }
}
