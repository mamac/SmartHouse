<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Lljm\HomeBundle\Entity\Gaslog;
use Lljm\HomeBundle\Form\GaslogType;
use Symfony\Component\HttpFoundation\Request;

class GasvisualController extends Controller
{

    public function yearoverviewAction()
    {
    $gaslogrecords = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Gaslog')
                     ->getGaslogrecords();

    $yearoverviewrecords = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Gaslog')
                     ->getYearOverview();

    return $this->render('LljmHomeBundle:Visualization:gasvisual.html.twig', array(
      'gaslogrecords' => $gaslogrecords,
      'yearoverviewrecords' => $yearoverviewrecords    ));

    }


  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function logdelAction(Gaslog $gaslog, Request $request)
  {
    $form = $this->createFormBuilder()->getForm();

     $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($gaslog);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Gas log record deleted');

        return $this->redirect($this->generateUrl('home_gasvisual'));
      }
    else{

    return $this->render('LljmHomeBundle:Visualization:gaslogdel.html.twig', array(
      'gaslog' => $gaslog,
      'form'    => $form->createView()
    ));
  } 
}
  /**
   * @Security("has_role('ROLE_USER')")
   */
       public function logaddAction(Request $request)
    {
        $gaslog = new Gaslog;

        $form = $this->createForm(GaslogType::class, $gaslog);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($gaslog);
        $em->flush();

        return $this->redirect($this->generateUrl('home_gasvisual'));
      }
    else{
        return $this->render('LljmHomeBundle:Visualization:gaslogadd.html.twig', array(
            'form' => $form->createView()));
  }

}

}