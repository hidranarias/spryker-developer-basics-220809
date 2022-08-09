<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AntelopeSearch\Communication\Plugin\Event\Listener;

use Pyz\Zed\Antelope\Dependency\AntelopeEvents;
use Spryker\Shared\Kernel\Transfer\TransferInterface;
use Spryker\Zed\Event\Dependency\Plugin\EventHandlerInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Pyz\Zed\AntelopeSearch\Business\AntelopeSearchFacadeInterface getFacade()
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchQueryContainerInterface getQueryContainer()
 */
class AntelopeSearchListener extends AbstractPlugin implements EventHandlerInterface
{
    /**
     * @param \Spryker\Shared\Kernel\Transfer\TransferInterface $transfer
     * @param string $eventName
     *
     * @return void
     */
    public function handle(TransferInterface $transfer, $eventName): void
    {
        fwrite(STDOUT, $eventName);
        /** @var \Generated\Shared\Transfer\EventEntityTransfer $transfer */
        if ($eventName === AntelopeEvents::ENTITY_PYZ_ANTELOPE_CREATE) {
            $this->getFacade()->publish($transfer->getId());
        }
    }
}
