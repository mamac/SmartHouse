<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\UnitRepository")
 */
class Unit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="unitname", type="string", length=255)
     */
    private $unitname;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set unitname
     *
     * @param string $unitname
     * @return Unit
     */
    public function setUnitname($unitname)
    {
        $this->unitname = $unitname;

        return $this;
    }

    /**
     * Get unitname
     *
     * @return string 
     */
    public function getUnitname()
    {
        return $this->unitname;
    }
}
