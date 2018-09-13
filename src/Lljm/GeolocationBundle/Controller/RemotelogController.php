<?php

namespace Lljm\GeolocationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lljm\GeolocationBundle\Entity\Geoloclog;

/*

URL example:

http://www.lljm.net:8081/geolocation_remotelog/2,48.85113535,2.71509716,177,23,45,82,201707021447

*/

class RemotelogController extends Controller
{
    public function logrecordAction($userid,$latitude,$longitude,$altitude,$speed,$direction,$battery,$logdate)
    {

        $geoloclog = new Geoloclog;

		$geoloclog -> setUserid($userid);
		$geoloclog -> setLatitude($latitude);
		$geoloclog -> setLongitude($longitude);
		$geoloclog -> setAltitude($altitude);
		$geoloclog -> setSpeed($speed);
        $geoloclog -> setDirection($direction);
        $geoloclog -> setBattery($battery);
		$geoloclog -> setLogdate(new \Datetime($logdate));

        $em = $this->getDoctrine()->getManager();
        $em->persist($geoloclog);
        $em->flush();

        return $this->render('LljmGeolocationBundle:Remotelog:logrecord.html.twig', array(
        	'geoloclog' => $geoloclog));
    }
}
