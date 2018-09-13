<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class VentilationController extends Controller
{

  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function indexAction()
    {
	    $ventilationswitches = $this->getDoctrine()
	                     ->getManager()
	                     ->getRepository('LljmHomeBundle:Node')
	                     ->getVentilationnodes();

        return $this->render('LljmHomeBundle:Ventilation:index.html.twig', array(
	      'ventilationswitches' => $ventilationswitches
	    ));
    }
}
