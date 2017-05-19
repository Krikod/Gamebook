<?php

namespace INSEAD\GamebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('INSEADGamebookBundle:Default:index.html.twig');
    }
}
