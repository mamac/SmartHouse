<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * NodeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NodeRepository extends EntityRepository
{
  public function Getnode()
  {

    $em = $this->getEntityManager();
    $query = $em->createQuery("
      SELECT
      a.id,
      a.nodeguid,
      b.zonename,
      d.subzonename,
      c.nodetype,
      a.lastheartbeat
      FROM LljmHomeBundle:Node a
      LEFT JOIN LljmHomeBundle:Zone b WITH a.nodezone = b.id
      LEFT JOIN LljmHomeBundle:Subzone d WITH a.nodesubzone = d.id
      LEFT JOIN LljmHomeBundle:Nodetype c WITH a.nodetype = c.id
      ORDER BY a.nodeguid
      ");
    return $query->getResult();
  }

  public function getTempnodes()
  {

    $em = $this->getEntityManager();
    $query = $em->createQuery("
      SELECT
      a.id,
      a.nodeguid,
      b.zonename,
      d.subzonename,
      c.nodetype
      FROM LljmHomeBundle:Node a
      LEFT JOIN LljmHomeBundle:Zone b WITH a.nodezone = b.id
      LEFT JOIN LljmHomeBundle:Subzone d WITH a.nodesubzone = d.id
      LEFT JOIN LljmHomeBundle:Nodetype c WITH a.nodetype = c.id
      WHERE c.id = 1
      ORDER BY b.zonename
      ");
    return $query->getResult();
  }

  public function getLightnodes()
  {

    $em = $this->getEntityManager();
    $query = $em->createQuery("
      SELECT
      a.id,
      a.nodeguid,
      b.zonename,
      b.id as zoneid,
      d.subzonename,
      d.id as subzoneid,
      c.nodetype
      FROM LljmHomeBundle:Node a
      LEFT JOIN LljmHomeBundle:Zone b WITH a.nodezone = b.id
      LEFT JOIN LljmHomeBundle:Subzone d WITH a.nodesubzone = d.id
      LEFT JOIN LljmHomeBundle:Nodetype c WITH a.nodetype = c.id
      WHERE c.id = 2
      ORDER BY b.zonename
      ");
    return $query->getResult();
  }

  public function getVentilationnodes()
  {

    $em = $this->getEntityManager();
    $query = $em->createQuery("
      SELECT
      a.id,
      a.nodeguid,
      b.zonename,
      b.id as zoneid,
      d.subzonename,
      d.id as subzoneid,
      c.nodetype
      FROM LljmHomeBundle:Node a
      LEFT JOIN LljmHomeBundle:Zone b WITH a.nodezone = b.id
      LEFT JOIN LljmHomeBundle:Subzone d WITH a.nodesubzone = d.id
      LEFT JOIN LljmHomeBundle:Nodetype c WITH a.nodetype = c.id
      WHERE c.id = 4
      ORDER BY b.zonename
      ");
    return $query->getResult();
  }
}
