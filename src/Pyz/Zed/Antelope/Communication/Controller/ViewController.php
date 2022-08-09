<?php

namespace Pyz\Zed\Antelope\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface getFacade()
 * @method \Pyz\Zed\Antelope\Communication\AntelopeCommunicationFactory getFactory()
 * @method \Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface getRepository()
 * @method \Pyz\Zed\Antelope\Persistence\AntelopeQueryContainerInterface getQueryContainer()
 */
class ViewController extends AbstractController
{
    public const PARAM_ID_ANTELOPE = 'id-antelope';

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function indexAction(Request $request): array
    {
        $idAntelope = $request->get(static::PARAM_ID_ANTELOPE);

        if (empty($idAntelope)) {
            return $this->redirectResponse('/antelope');
        }

        $idAntelope = $this->castId($idAntelope);

        $antelopeTransfer = $this->loadAntelopeTransfer($idAntelope);

        return $this->viewResponse([
            'antelope' => $antelopeTransfer->getAntelope(),
            'idAntelope' => $idAntelope,
        ]);
    }

    /**
     * @return AntelopeCriteriaTransfer
     */
    protected function createAntelopeCriteriaTransfer(): AntelopeCriteriaTransfer
    {
        return new AntelopeCriteriaTransfer();
    }

    /**
     * @param int $idAntelope
     *
     * @return AntelopeResponseTransfer
     */
    protected function loadAntelopeTransfer(int $idAntelope): AntelopeResponseTransfer
    {
        $antelopeCriteriaTransfer = $this->createAntelopeCriteriaTransfer();
        $antelopeCriteriaTransfer->setIdAntelope($idAntelope);
        return $this->getFacade()->getAntelope($antelopeCriteriaTransfer);
    }
}
