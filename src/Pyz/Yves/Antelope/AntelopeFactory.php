<?php

namespace Pyz\Yves\Antelope;

use Pyz\Client\Antelope\AntelopeClientInterface;
use Spryker\Client\Store\StoreClientInterface;
use Spryker\Yves\Kernel\AbstractFactory;

class AntelopeFactory extends AbstractFactory
{
    public function getAntelopeClient(): AntelopeClientInterface
    {
        return $this->getProvidedDependency(AntelopeDependencyProvider::CLIENT_ANTELOPE);
    }

    public function getStoreClient(): StoreClientInterface
    {
        return $this->getProvidedDependency(AntelopeDependencyProvider::CLIENT_STORE);
    }
}
