<?php

namespace Pyz\Yves\AntelopeWidget;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;

class AntelopeWidgetDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_ANTELOPE = 'CLIENT_ANTELOPE';

    /**
     * @param Container $container
     *
     * @return Container
     */
    public function provideDependencies(Container $container)
    {
        return $this->addAntelopeClient($container);
    }

    /**
     * @param Container $container
     *
     * @return Container
     */
    protected function addAntelopeClient(Container $container): Container
    {
        $container->set(self::CLIENT_ANTELOPE, function (Container $container) {
            return $container->getLocator()->antelope()->client();
        });

        return $container;
    }
}
