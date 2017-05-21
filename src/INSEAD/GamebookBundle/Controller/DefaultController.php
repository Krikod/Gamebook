<?php

namespace INSEAD\GamebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('INSEADGamebookBundle:Default:index.html.twig');
    }

    public function introAction()
    {
        return $this->render('INSEADGamebookBundle:Default:intro.html.twig');
    }

    public function chap_1Action()
    {
        return $this->render('INSEADGamebookBundle:Default:chap_1.html.twig');
    }

    public function chap_2Action()
    {
        return $this->render('INSEADGamebookBundle:Default:chap_2.html.twig');
    }

    public function chap_3Action()
    {
        return $this->render('INSEADGamebookBundle:Default:chap_3.html.twig');
    }

    public function chap_4Action()
    {
        return $this->render('INSEADGamebookBundle:Default:chap_4.html.twig');
    }

    public function chap_5Action()
    {
        return $this->render('INSEADGamebookBundle:Default:chap_5.html.twig');
    }

    public function chap_6Action()
    {
        return $this->render('INSEADGamebookBundle:Default:chap_6.html.twig');
    }

    public function chap_7Action()
    {
        return $this->render('INSEADGamebookBundle:Default:chap_7.html.twig');
    }

    public function chap_8Action()
    {
        return $this->render('INSEADGamebookBundle:Default:chap_8.html.twig');
    }

    public function chap_9Action()
    {
        return $this->render('INSEADGamebookBundle:Default:chap_9.html.twig');
    }
}
