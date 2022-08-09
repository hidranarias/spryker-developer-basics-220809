<?php

namespace Pyz\Yves\HelloWorld\Controller;

use Elastica\Request;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Spryker\Yves\Kernel\View\View;


class IndexController extends AbstractController
{
 public function indexAction(Request $req = null):View
 {

     $data = ['helloWorld' => 'Hello World!'];
//return $this->viewResponse($data);

     return $this->view(
         $data,
         [],
         '@HelloWorld/views/index/index.twig'
     );
 }
}
