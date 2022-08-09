<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AntelopeSearch;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class AntelopeSearchDependencyProvider extends AbstractBundleDependencyProvider
{
    public const ANTELOPE_FACADE = 'ANTELOPE FACADE';

    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container->set(static::ANTELOPE_FACADE, function (Container $container) {
            return $container->getLocator()->antelope()->facade();
        });

        return $container;
    }
}
