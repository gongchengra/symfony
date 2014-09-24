<?php

namespace Alan\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlanTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
