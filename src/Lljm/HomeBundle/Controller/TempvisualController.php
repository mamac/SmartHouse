<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TempvisualController extends Controller
{

    public function indexAction($daterx)
    {

    if(!$daterx){
        $daterx = date("Y-m-d");
    }

    $tempcharts = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Templog')
                     ->getTempcharts($daterx);

    return $this->render('LljmHomeBundle:Visualization:tempvisual.html.twig', array(
      'tempcharts' => $tempcharts,
      'daterx' => $daterx
    ));

    }
}