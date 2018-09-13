<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lljm\HomeBundle\Entity\Meter;
use Lljm\HomeBundle\Form\MeterType;
use Lljm\HomeBundle\Form\MeterEditType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

class MeterController extends Controller
{

    public function meterAction()
    {
    $meters = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Meter')
                     ->getMeter();

    return $this->render('LljmHomeBundle:Meter:meter.html.twig', array(
      'meters' => $meters,
    ));
    }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
       public function meteraddAction(Request $request)
    {
        $meter = new Meter;

        $form = $this->createForm(MeterType::class, $meter);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($meter);
        $em->flush();

        return $this->redirect($this->generateUrl('home_meter'));
      }
    else{
        return $this->render('LljmHomeBundle:Meter:meteradd.html.twig', array(
            'form' => $form->createView()));
  }
}

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function meterdelAction(Meter $meter, Request $request)
  {
    $form = $this->createFormBuilder()->getForm();
     $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
       $em = $this->getDoctrine()->getManager();
        $em->remove($meter);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Meter deleted');

        return $this->redirect($this->generateUrl('home_meter'));
      }
    else{

    return $this->render('LljmHomeBundle:Meter:meterdel.html.twig', array(
      'meter' => $meter,
      'form'    => $form->createView()
    ));
  } 
}

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function metereditAction(Meter $meter, Request $request)
  {
        $form = $this->createForm(MeterType::class, $meter);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($meter);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Meter updated');

        return $this->redirect($this->generateUrl('home_meter'));
      }
    else{

    return $this->render('LljmHomeBundle:Meter:meteredit.html.twig', array(
      'meter' => $meter,
      'form'    => $form->createView()
    ));
  } 
}

}
