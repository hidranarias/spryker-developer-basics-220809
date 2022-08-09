<?php

namespace Pyz\Zed\Antelope\Communication\Controller;

use Pyz\Zed\Antelope\Communication\AntelopeCommunicationFactory;
use Pyz\Zed\Antelope\Persistence\AntelopeQueryContainerInterface;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @method AntelopeCommunicationFactory getFactory()
 * @method AntelopeQueryContainerInterface getQueryContainer()
 */
class IndexController extends AbstractController
{
    /**
     * @return array
     */
    public function indexAction(): array
    {
        $table = $this->getFactory()
            ->createAntelopeTable();

        return $this->viewResponse([
            'antelopeTable' => $table->render(),
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function tableAction(): JsonResponse
    {
        $table = $this->getFactory()
            ->createAntelopeTable();

        return $this->jsonResponse($table->fetchData());
    }
}
