<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    public function render2(Request $request, string $view, array $parameters = array(), Response $response = null)
    {
        if($request->isXmlHttpRequest()) {
            $template = parent::render('default/'.$view, ['template' => 'baseAjax.html.twig'])->getContent();

            $json = json_encode($template);
            $response = new Response($json, 200);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }else {
            return parent::render('default/'.$view, ['template' => 'base.html.twig']);
        }
    }
}
