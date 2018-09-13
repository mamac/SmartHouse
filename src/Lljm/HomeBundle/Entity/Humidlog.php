<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Humidlog
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\HumidlogRepository")
 */
class Humidlog
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
     * @var \DateTime
     *
     * @ORM\Column(name="daterx", type="datetime")
     */
    private $daterx;

    /**
     * @var string
     *
     * @ORM\Column(name="node", type="string", length=255)
     */
    private $node;

    /**
     * @var float
     *
     * @ORM\Column(name="humvalue", type="float")
     */
    private $humvalue;


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
     * Set daterx
     *
     * @param \DateTime $daterx
     * @return Humidlog
     */
    public function setDaterx($daterx)
    {
        $this->daterx = $daterx;

        return $this;
    }

    /**
     * Get daterx
     *
     * @return \DateTime 
     */
    public function getDaterx()
    {
        return $this->daterx;
    }

    /**
     * Set node
     *
     * @param string $node
     * @return Humidlog
     */
    public function setNode($node)
    {
        $this->node = $node;

        return $this;
    }

    /**
     * Get node
     *
     * @return string 
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * Set humvalue
     *
     * @param float $humvalue
     * @return Humidlog
     */
    public function setHumvalue($humvalue)
    {
        $this->humvalue = $gumvalue;

        return $this;
    }

    /**
     * Get humvalue
     *
     * @return float 
     */
    public function getHumvalue()
    {
        return $this->humvalue;
    }
}
