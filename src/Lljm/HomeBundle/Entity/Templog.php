<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;

/**
 * Templog
 *
 * @ORM\Table(indexes={@Index(name="received_date", columns={"daterx"})})
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\TemplogRepository")
 */
class Templog
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
     * @ORM\Column(name="tmpvalue", type="float")
     */
    private $tmpvalue;


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
     * @return Templog
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
     * @return Templog
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
     * Set tmpvalue
     *
     * @param float $tmpvalue
     * @return Templog
     */
    public function setTmpvalue($tmpvalue)
    {
        $this->tmpvalue = $tmpvalue;

        return $this;
    }

    /**
     * Get tmpvalue
     *
     * @return float 
     */
    public function getTmpvalue()
    {
        return $this->tmpvalue;
    }
}
