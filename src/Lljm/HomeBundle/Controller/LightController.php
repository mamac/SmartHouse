<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class LightController extends Controller
{

  /**
   * @Security("has_role('ROLE_USER')")
   */
    public function indexAction()
    {
	    $lightswitches = $this->getDoctrine()
	                     ->getManager()
	                     ->getRepository('LljmHomeBundle:Node')
	                     ->getLightnodes();

        return $this->render('LljmHomeBundle:Light:index.html.twig', array(
	      'lightswitches' => $lightswitches,
	    ));
    }
}
