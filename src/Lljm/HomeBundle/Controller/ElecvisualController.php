<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Lljm\HomeBundle\Entity\Eleclog;
use Lljm\HomeBundle\Form\EleclogType;
use Symfony\Component\HttpFoundation\Request;

class ElecvisualController extends Controller
{

    public function yearoverviewAction()
    {
    $eleclogrecords = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Eleclog')
                     ->getEleclogrecords();

    $yearoverviewrecords = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Eleclog')
                     ->getYearOverview();

    return $this->render('LljmHomeBundle:Visualization:elecvisual.html.twig', array(
      'eleclogrecords' => $eleclogrecords,
      'yearoverviewrecords' => $yearoverviewrecords    ));

    }


  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function logdelAction(Eleclog $eleclog, Request $request)
  {
    $form = $this->createFormBuilder()->getForm();

     $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($eleclog);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Electricity log record deleted');

        return $this->redirect($this->generateUrl('home_elecvisual'));
      }
    else{

    return $this->render('LljmHomeBundle:Visualization:eleclogdel.html.twig', array(
      'eleclog' => $eleclog,
      'form'    => $form->createView()
    ));
  } 
}
  /**
   * @Security("has_role('ROLE_USER')")
   */
       public function logaddAction(Request $request)
    {
        $eleclog = new Eleclog;

        $form = $this->createForm(EleclogType::class, $eleclog);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($eleclog);
        $em->flush();

        return $this->redirect($this->generateUrl('home_elecvisual'));
      }
    else{
        return $this->render('LljmHomeBundle:Visualization:eleclogadd.html.twig', array(
            'form' => $form->createView()));
  }

}
}