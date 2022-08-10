<?php

namespace Pyz\Zed\Training;

use Spryker\Zed\Kernel\AbstractBundleConfig;

class TrainingConfig extends AbstractBundleConfig
{
    public function getMyDefaultStore(): string
    {
       
        return $this->get('MY_STORE');
    }
}
