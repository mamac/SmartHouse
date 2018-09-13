<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * GaslogRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GaslogRepository extends EntityRepository
{

  public function getGaslogrecords()
  {

    $em = $this->getEntityManager();
    $query = $em->createQuery("
      SELECT
      a.id,
      a.daterx,
      a.metervalue,
      a.consumption
      FROM LljmHomeBundle:Gaslog a
      ORDER BY a.daterx desc
      ")
    ;

    return $query->getResult();

  }


  public function getYearOverview()
  {

    $sql = '
    select
    year(daterx2) yearmonth,
    date_format(daterx2, \'%m\') monthmonth,
    round((metervalue - metervalue2) / datediff(daterx, daterx2) * 30, 0) consumption
    from 
    (
        SELECT
         e1.daterx,
         e1.metervalue,
         (
             select
             e3.daterx
             from symfony.gaslog e3
             where e3.daterx like concat(date_format(date_add(e1.daterx, interval -1 month), \'%Y-%m\'), \'%\')
             limit 1
         ) daterx2,
         (
             select
             e2.metervalue
             from symfony.gaslog e2
             where e2.daterx like concat(date_format(date_add(e1.daterx, interval -1 month), \'%Y-%m\'), \'%\')
             limit 1
         ) metervalue2
         from symfony.gaslog e1
    ) t1
    where daterx2
    order by daterx2
    ';

    $stmt = $this->getEntityManager()->getConnection()->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }
  
}
