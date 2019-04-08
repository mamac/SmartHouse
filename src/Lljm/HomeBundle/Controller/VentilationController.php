<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Lljm\HomeBundle\Entity\Zone;
use Lljm\HomeBundle\Form\ZoneType;
use Lljm\HomeBundle\Form\ZoneEditType;
use Symfony\Component\HttpFoundation\Request;

class VentilationController extends Controller
{

  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function indexAction()
    {
	    $zoneventilations = $this->getDoctrine()
	                     ->getManager()
	                     ->getRepository('LljmHomeBundle:Zone')
	                     ->getVentilationzone();

        return $this->render('LljmHomeBundle:Ventilation:index.html.twig', array(
	      'zoneventilations' => $zoneventilations
	    ));
    }

  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function editAction(Zone $zone, Request $request)
  {
    if($request->getMethod() == 'POST') {

      $i = 0;
      $ventilationschedule = "";
      for($i == 0 ; $i < 24 ; $i++)
      {
      switch( $request->request->get('ventilationslot'.$i) )
          {
          case "":
              $ventilationschedule = $ventilationschedule . "0";
              break;
          case "on":
              $ventilationschedule = $ventilationschedule . "1";
              break;

          }
      }

      $zone->setVentilationschedule( $ventilationschedule );

        $em = $this->getDoctrine()->getManager();
        $em->persist($zone);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Ventilation updated');

        return $this->redirect($this->generateUrl('home_action_ventilation'));
      }
    else{

    return $this->render('LljmHomeBundle:Ventilation:zoneedit.html.twig', array(
      'zone' => $zone
    ));
  }
  } 

}
