<?php

namespace Pyz\Yves\CustomerPage;

use Pyz\Client\Antelope\AntelopeClientInterface;
use Pyz\Yves\CustomerPage\Form\FormFactory;
use Pyz\Yves\CustomerPage\Form\Transformer\AntelopeTransformer;
use SprykerShop\Yves\CustomerPage\CustomerPageFactory as SprykerCustomerPageFactory;

class CustomerPageFactory extends SprykerCustomerPageFactory
{
    public function createCustomerFormFactory(): FormFactory
    {
        return new FormFactory();
    }

    public function getAntelopeClient(): AntelopeClientInterface
    {
        return $this->getProvidedDependency(CustomerPageDependencyProvider::CLIENT_ANTELOPE);
    }

    public function createAntelopeTransformer(): AntelopeTransformer
    {
        return new AntelopeTransformer(
            $this->getAntelopeClient()
        );
    }
}
