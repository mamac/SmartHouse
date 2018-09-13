<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lljm\HomeBundle\Entity\Node;
use Lljm\HomeBundle\Form\NodeType;
use Lljm\HomeBundle\Form\NodeEditType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

class NodeController extends Controller
{

    public function nodeAction()
    {
    $nodes = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Node')
                     ->getNode();

    return $this->render('LljmHomeBundle:Node:node.html.twig', array(
      'nodes' => $nodes,
    ));
    }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
       public function nodeaddAction(Request $request)
    {
        $node = new Node;

        $form = $this->createForm(NodeType::class, $node);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($node);
        $em->flush();

        return $this->redirect($this->generateUrl('home_node'));
      }
    else{
        return $this->render('LljmHomeBundle:Node:nodeadd.html.twig', array(
            'form' => $form->createView()));
  }
}

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function nodedelAction(Node $node, Request $request)
  {
    $form = $this->createFormBuilder()->getForm();

     $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($node);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Node deleted');

        return $this->redirect($this->generateUrl('home_node'));
      }
    else{

    return $this->render('LljmHomeBundle:Node:nodedel.html.twig', array(
      'node' => $node,
      'form'    => $form->createView()
    ));
  } 
}

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function nodeeditAction(Node $node, Request $request)
  {
        $form = $this->createForm(NodeType::Class, $node);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($node);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Node updated');

        return $this->redirect($this->generateUrl('home_node'));
      }
    else{

    return $this->render('LljmHomeBundle:Node:nodeedit.html.twig', array(
      'node' => $node,
      'form'    => $form->createView()
    ));
  } 
}
}
