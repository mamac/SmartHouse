<?php

namespace Lljm\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
  public function getUsers()
  {

    $em = $this->getEntityManager();
    $query = $em->createQuery("
      SELECT
      a.username
      FROM LljmUserBundle:User a
      ORDER BY a.username
      ");
    return $query->getResult();
  }
}
