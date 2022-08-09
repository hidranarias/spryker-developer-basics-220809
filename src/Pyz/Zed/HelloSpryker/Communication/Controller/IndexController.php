<?php

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;
use Pyz\Zed\HelloSpryker\Business\HelloSprykerFacadeInterface;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method HelloSprykerFacadeInterface getFacade()
*/

class IndexController extends AbstractController
{

public function indexAction(Request $request)
{
   $dt = new StringReverserTransfer();
    $originalString = $request->get('string', 'Hello Spryker');
    $dt->setOriginalString($originalString);
    $dt = $this->getFacade()->reverseString($dt);
    $dt->setOriginalString($originalString);
     $helloSprikerTransfer =  new HelloSprykerTransfer();
     $helloSprikerTransfer->fromArray($dt->toArray());
           // Create new row in DB.
    $helloSprikerTransfer = $this->getFacade()->createHelloSprykerEntity($helloSprikerTransfer);

           // Retrieve data from DB.
    $helloSprikerTransfer = $this->getFacade()->findHelloSpryker($helloSprikerTransfer);

    return [
     'string' => $helloSprikerTransfer->getReversedString()
    ];
}
}
