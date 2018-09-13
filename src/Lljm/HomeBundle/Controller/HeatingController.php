<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lljm\HomeBundle\Entity\Zone;
use Lljm\HomeBundle\Entity\HeatingLog;
use Lljm\HomeBundle\Form\ZoneheatingType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

class HeatingController extends Controller
{

    public function indexAction()
    {
    $zoneheatings = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Zone')
                     ->getHeatingzone();

    $outsidetemp = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Zone')
                     ->getOutsideTemp();

    $boilerzone = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Zone')
                     ->getBoilerzone();

    $heatinglog = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:HeatingLog')
                     ->getHeatingLog();

    return $this->render('LljmHomeBundle:Heating:index.html.twig', array(
      'zoneheatings' => $zoneheatings,
      'heatinglog' => $heatinglog,
      'boilerzone' => $boilerzone,
      'outsidetemp' => $outsidetemp
    ));
    }


  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function editAction(Zone $zone, Request $request)
  {


    if($request->getMethod() == 'POST') {

      $tempeco = $request->request->get('tempeco');
      $zone->setTempeco( $tempeco );

      $tempcomfort = $request->request->get('tempcomfort');
      $zone->setTempcomfort( $tempcomfort );

      $heatingmode = $request->request->get('heatingmode');
      $zone->setHeatingmode( $heatingmode );

      $i = 0;
      $heatschedule = "";
      for($i == 0 ; $i < 168 ; $i++)
      {
      switch( $request->request->get('heatslot'.$i) )
          {
          case "":
              $heatschedule = $heatschedule . "0";
              break;
          case "on":
              $heatschedule = $heatschedule . "1";
              break;

          }
      }

//      echo $heatschedule;
//      break;

      $zone->setHeatschedule( $heatschedule );

        $em = $this->getDoctrine()->getManager();
        $em->persist($zone);
        $em->flush();

        return $this->redirect($this->generateUrl('home_action_heating'));
    }

    return $this->render('LljmHomeBundle:Heating:zoneheatingedit.html.twig', array(
      'zone' => $zone
    ));
  } 

  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function allzoneupdateAction($heatingmode)
  {

    $heatingmodeupdate = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Zone')
                     ->setHeatingmodeallzones($heatingmode);


    return $this->redirect($this->generateUrl('home_action_heating'));
  }

  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function onezoneupdateAction($id, $heatingmode)
  {

    $heatingmodeupdate = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Zone')
                     ->setHeatingmodeonezone($id, $heatingmode);


    return $this->redirect($this->generateUrl('home_action_heating'));
  }
}

