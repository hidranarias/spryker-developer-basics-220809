<?php

namespace Pyz\Yves\PersonalizedProduct\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
 public function indexAction($limit)

 {
             $searchResults = $this->getClient()->getPersonalizedProducts($limit);

             return $this->view(
                 $searchResults,
                 [],
                 '@PersonalizedProduct/views/Index/index.twig'
             );
 }
}
