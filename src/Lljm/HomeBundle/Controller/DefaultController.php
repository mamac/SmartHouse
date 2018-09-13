<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

	$houses = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:House')
                     ->getHouse();
        return $this->render('LljmHomeBundle:Default:index.html.twig', array(
      'houses' => $houses
    ));
    }
}
