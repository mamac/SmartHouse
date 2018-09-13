<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Meter
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\MeterRepository")
 */
class Meter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="metername", type="string", length=255)
     */
    private $metername;

    /**
    * @ORM\ManyToOne(targetEntity="Lljm\HomeBundle\Entity\Resource", cascade={"persist"})
    * @Assert\NotBlank()
    */
    private $resource;

    /**
    * @ORM\ManyToOne(targetEntity="Lljm\HomeBundle\Entity\Unit", cascade={"persist"})
    * @Assert\NotBlank()
    */
    private $unit;


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
     * Set metername
     *
     * @param string $metername
     * @return Meter
     */
    public function setMetername($metername)
    {
        $this->metername = $metername;

        return $this;
    }

    /**
     * Get metername
     *
     * @return string 
     */
    public function getMetername()
    {
        return $this->metername;
    }

    /**
     * Set resource
     *
     * @param \Lljm\HomeBundle\Entity\Resource $resource
     * @return Meter
     */
    public function setResource(\Lljm\HomeBundle\Entity\Resource $resource = null)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return \Lljm\HomeBundle\Entity\Resource 
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set unit
     *
     * @param \Lljm\HomeBundle\Entity\Unit $unit
     * @return Meter
     */
    public function setUnit(\Lljm\HomeBundle\Entity\Unit $unit = null)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return \Lljm\HomeBundle\Entity\Unit 
     */
    public function getUnit()
    {
        return $this->unit;
    }
}
