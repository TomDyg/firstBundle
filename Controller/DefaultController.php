<?php

namespace tomdyg\firstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('tomdygfirstBundle:Default:index.html.twig');
    }
}
