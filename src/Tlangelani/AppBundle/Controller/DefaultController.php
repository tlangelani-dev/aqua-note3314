<?php

namespace Tlangelani\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TlangelaniAppBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('TlangelaniAppBundle:Default:contact.html.twig');
    }
}
