<?php

namespace SNT\DarmankoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SNTDarmankoBundle:Default:index.html.twig');
    }
}
