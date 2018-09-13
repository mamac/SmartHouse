<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\Query\ResultSetMapping;
  
/**
 * TemplogRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TemplogRepository extends EntityRepository
{
  public function getNumRecords()
  {
    $em = $this->getEntityManager();
    $query = $em->createQuery("
                  select COUNT(f.id) 
                  from LljmHomeBundle:Templog f
                  ");

    return $query->getSingleScalarResult();
  }

  public function getTemplogs($nbPerPage, $datefrom, $dateto)
  {

    $em = $this->getEntityManager();
    $query = $em->createQuery("
      SELECT
      a.node,
      a.tmpvalue,
      a.daterx,
      c.zonename
      FROM LljmHomeBundle:Templog a
      LEFT JOIN LljmHomeBundle:Node b WITH a.node = b.nodeguid
      LEFT JOIN LljmHomeBundle:Zone c WITH b.nodezone = c.id
      WHERE a.daterx BETWEEN '$datefrom' and '$dateto' 
      ORDER BY a.daterx desc
      ")
      ->setMaxResults($nbPerPage)
    ;

    return $query->getResult();
  }

  public function getTempcharts($daterx)
  {

    $em = $this->getEntityManager();
    $query = $em->createQuery("
      SELECT
      c.id,
      c.zonename,
      a.tmpvalue,
      a.daterx
      FROM LljmHomeBundle:Templog a
      LEFT JOIN LljmHomeBundle:Node b WITH a.node = b.nodeguid
      LEFT JOIN LljmHomeBundle:Zone c WITH b.nodezone = c.id
      WHERE a.daterx like '".$daterx."%'
      ORDER BY c.id, a.daterx
      ")
    ;

    return $query->getResult();

  }
}
