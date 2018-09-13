<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HumidvisualController extends Controller
{

    public function indexAction($daterx)
    {

    if(!$daterx){
        $daterx = date("Y-m-d");
    }

    $humidcharts = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Humidlog')
                     ->getHumidcharts($daterx);

    return $this->render('LljmHomeBundle:Visualization:humidvisual.html.twig', array(
      'humidcharts' => $humidcharts,
      'daterx' => $daterx
    ));

    }
}