<?php

namespace Alan\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Alan\TaskBundle\Entity\Task;
use Alan\TaskBundle\Form\Type\TaskType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
        $task = new Task();
        $task -> setTask('Write a blog post');
        $task -> setDueDate(new \DateTime('tomorrow'));

//        $form = $this -> createFormBuilder($task)
//            -> add('task', 'text')
//            -> add('dueDate', 'date', array('widget' => 'single_text'))
//            -> add('save', 'submit', array('label' => 'Create Post'))
//            -> getForm();

//        $form = $this -> createForm(new TaskType(), $task);

        $form = $this -> createForm('task', $task);

        return $this -> render('AlanTaskBundle:Default:new.html.twig',array(
            'form' => $form -> createView()
        ));
    }

//    public function indexAction($name)
//    {
//        return $this->render('AcmeTaskBundle:Default:index.html.twig', array('name' => $name));
//    }
}
