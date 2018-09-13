<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HeatingLog
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\HeatingLogRepository")
 */
class HeatingLog
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
     * @ORM\Column(name="textlog", type="text")
     */
    private $textlog;

    /**
     * @var boolean
     *
     * @ORM\Column(name="boilerstatus", type="boolean", nullable = true)
     */
    private $boilerstatus;

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
     * Set textlog
     *
     * @param string $textlog
     * @return HeatingLog
     */
    public function setTextlog($textlog)
    {
        $this->textlog = $textlog;

        return $this;
    }

    /**
     * Get textlog
     *
     * @return string 
     */
    public function getTextlog()
    {
        return $this->textlog;
    }

    /**
     * Set boilerstatus
     *
     * @param boolean $boilerstatus
     * @return HeatingLog
     */
    public function setBoilerstatus($boilerstatus)
    {
        $this->boilerstatus = $boilerstatus;

        return $this;
    }

    /**
     * Get boilerstatus
     *
     * @return boolean 
     */
    public function getBoilerstatus()
    {
        return $this->boilerstatus;
    }
}
