<?php

namespace Lljm\GeolocationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lljm\GeolocationBundle\Entity\Geoloclog;

class DefaultController extends Controller
{
    public function indexAction($datefrom, $dateto, $userid)
    {

      $geoloclogs = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('LljmGeolocationBundle:Geoloclog')
                       ->getGeoloclogs($datefrom, $dateto, $userid);

      $userManager = $this->get('fos_user.user_manager');
      $users = $userManager->findUsers();


      return $this->render('LljmGeolocationBundle:Default:index.html.twig', array(
        'geoloclogs' => $geoloclogs,
        'datefrom' => $datefrom,
        'dateto' => $dateto,
        'userid' => $userid,
        'users' => $users
      ));
    }
}
