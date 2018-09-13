<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Heatingmode
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\HeatingmodeRepository")
 */
class Heatingmode
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
     * @ORM\Column(name="modedesc", type="string", length=255)
     */
    private $modedesc;


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
     * Set modedesc
     *
     * @param string $modedesc
     * @return Heatingmode
     */
    public function setModedesc($modedesc)
    {
        $this->modedesc = $modedesc;

        return $this;
    }

    /**
     * Get modedesc
     *
     * @return string 
     */
    public function getModedesc()
    {
        return $this->modedesc;
    }
}
