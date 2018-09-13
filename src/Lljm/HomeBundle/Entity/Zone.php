<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zone
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\ZoneRepository")
 */
class Zone
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
     * @ORM\Column(name="zonename", type="string", length=255)
     */
    private $zonename;

    /**
     * @var boolean
     *
     * @ORM\Column(name="heatingenabled", type="boolean", nullable = true)
     */
    private $heatingenabled;

    /**
     * @var float
     *
     * @ORM\Column(name="tempcomfort", type="float", nullable = true)
     */
    private $tempcomfort;

    /**
     * @var float
     *
     * @ORM\Column(name="tempeco", type="float", nullable = true)
     */
    private $tempeco;

    /**
     * @var float
     *
     * @ORM\Column(name="currenttemp", type="float", nullable = true)
     */
    private $currenttemp;

    /**
     * @var integer
     *
     * @ORM\Column(name="heatingmode", type="integer", nullable = true)
     */

    private $heatingmode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="heatingstatus", type="boolean", nullable = true)
     */
    private $heatingstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="heatschedule", type="string", length=168, nullable = true)
     */
    private $heatschedule;


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
     * Set zonename
     *
     * @param string $zonename
     * @return Zone
     */
    public function setZonename($zonename)
    {
        $this->zonename = $zonename;

        return $this;
    }

    /**
     * Get zonename
     *
     * @return string 
     */
    public function getZonename()
    {
        return $this->zonename;
    }

    /**
     * Set heatingenabled
     *
     * @param boolean $heatingenabled
     * @return Zone
     */
    public function setHeatingenabled($heatingenabled)
    {
        $this->heatingenabled = $heatingenabled;

        return $this;
    }

    /**
     * Get heatingenabled
     *
     * @return boolean 
     */
    public function getHeatingenabled()
    {
        return $this->heatingenabled;
    }

    /**
     * Set tempcomfort
     *
     * @param float $tempcomfort
     * @return Zone
     */
    public function setTempcomfort($tempcomfort)
    {
        $this->tempcomfort = $tempcomfort;

        return $this;
    }

    /**
     * Get tempcomfort
     *
     * @return float 
     */
    public function getTempcomfort()
    {
        return $this->tempcomfort;
    }

    /**
     * Set tempeco
     *
     * @param float $tempeco
     * @return Zone
     */
    public function setTempeco($tempeco)
    {
        $this->tempeco = $tempeco;

        return $this;
    }

    /**
     * Get tempeco
     *
     * @return float 
     */
    public function getTempeco()
    {
        return $this->tempeco;
    }

    /**
     * Set currenttemp
     *
     * @param float $currenttemp
     * @return Zone
     */
    public function setCurrenttemp($currenttemp)
    {
        $this->currenttemp = $currenttemp;

        return $this;
    }

    /**
     * Get currenttemp
     *
     * @return float 
     */
    public function getCurrenttemp()
    {
        return $this->currenttemp;
    }


    /**
     * Set heatschedule
     *
     * @param string $heatschedule
     * @return Zone
     */
    public function setHeatschedule($heatschedule)
    {
        $this->heatschedule = $heatschedule;

        return $this;
    }

    /**
     * Get heatschedule
     *
     * @return string 
     */
    public function getHeatschedule()
    {
        return $this->heatschedule;
    }

    /**
     * Set heatingmode
     *
     * @param integer $heatingmode
     * @return Zone
     */
    public function setHeatingmode($heatingmode)
    {
        $this->heatingmode = $heatingmode;

        return $this;
    }

    /**
     * Get heatingmode
     *
     * @return integer 
     */
    public function getHeatingmode()
    {
        return $this->heatingmode;
    }

    /**
     * Set heatingstatus
     *
     * @param boolean $heatingstatus
     * @return Zone
     */
    public function setHeatingstatus($heatingstatus)
    {
        $this->heatingstatus = $heatingstatus;

        return $this;
    }

    /**
     * Get heatingstatus
     *
     * @return boolean 
     */
    public function getHeatingstatus()
    {
        return $this->heatingstatus;
    }
}
