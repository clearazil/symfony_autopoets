<?php

namespace Autopoets\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NewsBundle:Default:index.html.twig');
    }

    public function createAction()
    {
    	return $this->render('NewsBundle:Default:create.html.twig');
    }
}
