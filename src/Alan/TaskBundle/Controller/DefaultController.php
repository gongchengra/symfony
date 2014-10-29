<?php

namespace Alan\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Alan\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
        $task = new Task();
        $task -> setTask('Write a blog post');
        $task -> setDueDate(new \DateTime('tomorrow'));

        $form = $this -> createFormBuilder($task)
            -> add('task', 'text')
            -> add('dueDate', 'date')
            -> add('save', 'submit', array('label' => 'Create Post'))
            -> getForm();
        return $this -> render('AlanTaskBundle:Default:new.html.twig',array(
            'form' => $form -> createView()
        ));
    }

//    public function indexAction($name)
//    {
//        return $this->render('AcmeTaskBundle:Default:index.html.twig', array('name' => $name));
//    }
}
