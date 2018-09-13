<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lljm\HomeBundle\Entity\Zone;
use Lljm\HomeBundle\Form\ZoneType;
use Lljm\HomeBundle\Form\ZoneEditType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

class ZoneController extends Controller
{

    public function zoneAction()
    {
    $zones = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Zone')
                     ->getZone();

    return $this->render('LljmHomeBundle:Zone:zone.html.twig', array(
      'zones' => $zones,
    ));
    }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function zoneaddAction(Request $request)
    {
        $zone = new Zone;

        $form = $this->createForm(ZoneType::class, $zone);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($zone);
        $em->flush();

        return $this->redirect($this->generateUrl('home_zone'));
      }
    else{
        return $this->render('LljmHomeBundle:Zone:zoneadd.html.twig', array(
            'form' => $form->createView()));
  }
}

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function zonedelAction(Zone $zone, Request $request)
  {
     $form = $this->createFormBuilder()->getForm();
     $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($zone);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Zone deleted');

        return $this->redirect($this->generateUrl('home_zone'));
      }
      else{

    return $this->render('LljmHomeBundle:Zone:zonedel.html.twig', array(
      'zone' => $zone,
      'form'    => $form->createView()
    ));
  }
}

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function zoneeditAction(Zone $zone, Request $request)
  {
        $form = $this->createForm(ZoneType::class, $zone);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($zone);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Zone updated');

        return $this->redirect($this->generateUrl('home_zone'));
      }
    else{

    return $this->render('LljmHomeBundle:Zone:zoneedit.html.twig', array(
      'zone' => $zone,
      'form'    => $form->createView()
    ));
  }
}

}
