<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class HelloController extends AbstractController
{
 public function indexAction(Request $req)
 {
    return $this->viewResponse(
      [  'hellostring' => $req->get('greetings','Hello world')]

    );
 }
}
