<?php

namespace Lljm\GeolocationBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * GeoloclogRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GeoloclogRepository extends EntityRepository
{
  public function getGeoloclogs($datefrom, $dateto, $user)
  {

    $em = $this->getEntityManager();
    $query = $em->createQuery("
      SELECT
      a.id,
      b.firstname,
      a.latitude,
      a.longitude,
      a.altitude,
      a.speed,
      a.direction,
      a.battery,
      a.logdate
      FROM LljmGeolocationBundle:Geoloclog a
      JOIN LljmUserBundle:User b WITH a.userid = b.id
      WHERE a.logdate BETWEEN '$datefrom' and '$dateto'
      and b.id = '$user'
      ORDER BY a.logdate asc
      ")
    ;

    return $query->getResult();
  }
}
