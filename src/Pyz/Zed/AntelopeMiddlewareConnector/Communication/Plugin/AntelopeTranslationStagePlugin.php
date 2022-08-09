<?php

namespace Pyz\Zed\AntelopeMiddlewareConnector\Communication\Plugin;

use Generated\Shared\Transfer\TranslatorConfigTransfer;
use Pyz\Zed\AntelopeMiddlewareConnector\Business\AntelopeMiddlewareConnectorFacadeInterface;
use Pyz\Zed\AntelopeMiddlewareConnector\Communication\AntelopeMiddlewareConnectorCommunicationFactory;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use SprykerMiddleware\Shared\Process\Stream\WriteStreamInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\StagePluginInterface;

/**
 * @method AntelopeMiddlewareConnectorCommunicationFactory getFactory()
 * @method AntelopeMiddlewareConnectorFacadeInterface getFacade()
 */
class AntelopeTranslationStagePlugin extends AbstractPlugin implements StagePluginInterface
{
    protected const PLUGIN_NAME = 'AntelopeTranslationStagePlugin';

    /**
     * @return TranslatorConfigTransfer
     */
    protected function getTranslatorConfig(): TranslatorConfigTransfer
    {
        return $this->getFacade()
            ->getAntelopeTranslatorConfig();
    }

    /**
     * @param mixed $payload
     * @param WriteStreamInterface $outStream
     * @param mixed $originalPayload
     *
     * @return mixed
     */
    public function process($payload, WriteStreamInterface $outStream, $originalPayload)
    {
        if(!$payload){
            return  [];
        }
        return $this->getFactory()
            ->getProcessFacade()
            ->translate($payload, $this->getTranslatorConfig());
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return static::PLUGIN_NAME;
    }
}
