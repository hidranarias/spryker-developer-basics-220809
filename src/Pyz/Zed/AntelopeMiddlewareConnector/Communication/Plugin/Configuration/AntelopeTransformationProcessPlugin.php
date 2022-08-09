<?php

namespace Pyz\Zed\AntelopeMiddlewareConnector\Communication\Plugin\Configuration;

use Pyz\Zed\AntelopeMiddlewareConnector\Communication\AntelopeMiddlewareConnectorCommunicationFactory;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\Configuration\ProcessConfigurationPluginInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\Hook\PostProcessorHookPluginInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\Hook\PreProcessorHookPluginInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\Iterator\ProcessIteratorPluginInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\Log\MiddlewareLoggerConfigPluginInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\StagePluginInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\Stream\InputStreamPluginInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\Stream\OutputStreamPluginInterface;

/**
 * @method AntelopeMiddlewareConnectorCommunicationFactory getFactory()
 */
class AntelopeTransformationProcessPlugin extends AbstractPlugin implements ProcessConfigurationPluginInterface
{
    protected const PROCESS_NAME = 'ANTELOPE_PROCESS';

    /**
     * @return string
     */
    public function getProcessName(): string
    {
        return static::PROCESS_NAME;
    }

    /**
     * @return InputStreamPluginInterface
     */
    public function getInputStreamPlugin(): InputStreamPluginInterface
    {
        return $this->getFactory()
            ->getAntelopeInputStreamPlugin();
    }

    /**
     * @return OutputStreamPluginInterface
     */
    public function getOutputStreamPlugin(): OutputStreamPluginInterface
    {
        return $this->getFactory()
            ->getAntelopeOutputStreamPlugin();
    }

    /**
     * @return ProcessIteratorPluginInterface
     */
    public function getIteratorPlugin(): ProcessIteratorPluginInterface
    {
        return $this->getFactory()
            ->getAntelopeIteratorPlugin();
    }

    /**
     * @return StagePluginInterface[]
     */
    public function getStagePlugins(): array
    {
        return $this->getFactory()
            ->getAntelopeStagePluginStack();
    }

    /**
     * @return MiddlewareLoggerConfigPluginInterface
     */
    public function getLoggerPlugin(): MiddlewareLoggerConfigPluginInterface
    {
        return $this->getFactory()
            ->getAntelopeLoggerConfigPlugin();
    }

    /**
     * @return PreProcessorHookPluginInterface[]
     */
    public function getPreProcessorHookPlugins(): array
    {
        return [];
    }

    /**
     * @return PostProcessorHookPluginInterface[]
     */
    public function getPostProcessorHookPlugins(): array
    {
        return [];
    }
}
