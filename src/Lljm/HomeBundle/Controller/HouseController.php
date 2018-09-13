<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lljm\HomeBundle\Entity\House;
use Lljm\HomeBundle\Form\HouseType;
use Lljm\HomeBundle\Form\HouseEditType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

class HouseController extends Controller
{

    public function houseAction()
    {
    $houses = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:House')
                     ->getHouse();

    return $this->render('LljmHomeBundle:House:house.html.twig', array(
      'houses' => $houses
    ));
    }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function houseaddAction(Request $request)
    {
        $house = new House;

        $form = $this->createForm(HouseType::class, $house);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($house);
        $em->flush();

        return $this->redirect($this->generateUrl('home_house'));
      }
    else{
    
        return $this->render('LljmHomeBundle:House:houseadd.html.twig', array(
            'form' => $form->createView()));
  }
}

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function housedelAction(House $house, Request $request)
  {
    $form = $this->createFormBuilder()->getForm();
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->remove($house);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'House deleted');

        return $this->redirect($this->generateUrl('home_house'));
      }
    else{

    return $this->render('LljmHomeBundle:House:housedel.html.twig', array(
      'house' => $house,
      'form'    => $form->createView()
    ));
  } 
}

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function houseeditAction(House $house, Request $request)
  {
    $form = $this->createForm(HouseType::class, $house);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($house);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'House updated');

        return $this->redirect($this->generateUrl('home_house'));
      }

    return $this->render('LljmHomeBundle:House:houseedit.html.twig', array(
      'house' => $house,
      'form'    => $form->createView()
    ));
  } 

}
