<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;

class AppController extends BaseController
{
    public function indexAction()
    {
        return $this->render('AppBundle::index.html.twig');
    }
}
