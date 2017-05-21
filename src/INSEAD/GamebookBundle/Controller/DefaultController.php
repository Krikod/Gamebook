<?php

namespace INSEAD\GamebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('INSEADGamebookBundle:Default:index.html.twig');
    }

    public function chap_1Action()
    {
        return $this->render('INSEADGamebookBundle:Default:chap_1.html.twig');
    }

    public function chap_3Action()
    {
        return $this->render('INSEADGamebookBundle:Default:chap_3.html.twig');
    }
}
