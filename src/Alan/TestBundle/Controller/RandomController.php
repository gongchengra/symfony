<?php
namespace Alan\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RandomController extends Controller
{
    public function indexAction($limit)
    {
        $number = rand(1,$limit);
        return $this -> render(
            'AlanTestBundle:Random:index.html.twig',
//            'AlanTestBundle:Random:index.html.php',
            array('number'=>$number)
        );
    }
}
