<?php

namespace Pyz\Zed\AntelopeMiddlewareConnector\Communication\Plugin\Configuration;

use Pyz\Zed\AntelopeMiddlewareConnector\Business\AntelopeMiddlewareConnectorFacadeInterface;
use Pyz\Zed\AntelopeMiddlewareConnector\Communication\AntelopeMiddlewareConnectorCommunicationFactory;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\Configuration\ConfigurationProfilePluginInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\Configuration\ProcessConfigurationPluginInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\TranslatorFunction\TranslatorFunctionPluginInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\Validator\ValidatorPluginInterface;

/**
 * @method AntelopeMiddlewareConnectorCommunicationFactory getFactory()
 * @method AntelopeMiddlewareConnectorFacadeInterface getFacade()
 */
class AntelopeMiddlewareConnectorConfigurationProfilePlugin extends AbstractPlugin implements ConfigurationProfilePluginInterface
{
    /**
     * @return ProcessConfigurationPluginInterface[]
     */
    public function getProcessConfigurationPlugins(): array
    {
        return $this->getFactory()
            ->getAntelopeProcesses();
    }

    /**
     * @return TranslatorFunctionPluginInterface[]
     */
    public function getTranslatorFunctionPlugins(): array
    {
        return $this->getFactory()
            ->getAntelopeTranslatorFunctions();
    }

    /**
     * @return ValidatorPluginInterface[]
     */
    public function getValidatorPlugins(): array
    {
        return [];
    }
}
