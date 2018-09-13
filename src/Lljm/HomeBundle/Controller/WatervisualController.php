<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Lljm\HomeBundle\Entity\Waterlog;
use Lljm\HomeBundle\Form\WaterlogType;
use Symfony\Component\HttpFoundation\Request;

class WatervisualController extends Controller
{

    public function yearoverviewAction()
    {
    $waterlogrecords = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Waterlog')
                     ->getWaterlogrecords();

    $yearoverviewrecords = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Waterlog')
                     ->getYearOverview();

    return $this->render('LljmHomeBundle:Visualization:watervisual.html.twig', array(
      'waterlogrecords' => $waterlogrecords,
      'yearoverviewrecords' => $yearoverviewrecords    ));

    }


  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function logdelAction(Waterlog $waterlog, Request $request)
  {
    $form = $this->createFormBuilder()->getForm();

     $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($waterlog);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Watertricity log record deleted');

        return $this->redirect($this->generateUrl('home_watervisual'));
      }
    else{

    return $this->render('LljmHomeBundle:Visualization:waterlogdel.html.twig', array(
      'waterlog' => $waterlog,
      'form'    => $form->createView()
    ));
  } 
}
  /**
   * @Security("has_role('ROLE_USER')")
   */
       public function logaddAction(Request $request)
    {
        $waterlog = new Waterlog;

        $form = $this->createForm(WaterlogType::class, $waterlog);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($waterlog);
        $em->flush();

        return $this->redirect($this->generateUrl('home_watervisual'));
      }
    else{
        return $this->render('LljmHomeBundle:Visualization:waterlogadd.html.twig', array(
            'form' => $form->createView()));
  }

}

}