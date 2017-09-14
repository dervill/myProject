<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends BaseController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render2($request, 'index.html.twig');


    }

    /**
     * @Route("/test", name="test")
     */
    public function testAction(Request $request)
    {
        return $this->render2($request, 'test.html.twig');
    }
}
