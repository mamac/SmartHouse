<?php

namespace Lljm\TasksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Lljm\TasksBundle\Entity\Task;
use Lljm\TasksBundle\Form\TaskType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/tasks")
     */
    public function indexAction()
    {

    $taskrecords = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmTasksBundle:Task')
                     ->getTaskrecords();

        return $this->render('LljmTasksBundle:Default:index.html.twig', array(
      'taskrecords' => $taskrecords    ));
    }

  /**
   * @Security("has_role('ROLE_USER')")
   */
       public function taskaddAction(Request $request)
    {
        $task = new Task;

        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($task);
        $em->flush();

        return $this->redirect($this->generateUrl('tasks'));
      }
    else{
        return $this->render('LljmTasksBundle:Default:taskadd.html.twig', array(
            'form' => $form->createView()));
  }

}

  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function taskdelAction(Task $task, Request $request)
  {
    $form = $this->createFormBuilder()->getForm();

     $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($task);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Task deleted');

        return $this->redirect($this->generateUrl('tasks'));
      }
    else{

    return $this->render('LljmTasksBundle:Default:taskdel.html.twig', array(
      'task' => $task,
      'form'    => $form->createView()
    ));
  } 
}

  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function taskeditAction(Task $task, Request $request)
  {
    $form = $this->createForm(TaskType::class, $task);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($task);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Task updated');

        return $this->redirect($this->generateUrl('tasks'));
      }

    return $this->render('LljmTasksBundle:Default:taskedit.html.twig', array(
      'task' => $task,
      'form'    => $form->createView()
    ));
  } 

}
