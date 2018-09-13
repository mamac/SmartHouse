<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping\Index;

/**
 * Gaslog
 *
 * @ORM\Table(indexes={@Index(name="received_date", columns={"daterx"})})
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\GaslogRepository")
 */
class Gaslog
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
    public $daterx;

    /**
    * @ORM\ManyToOne(targetEntity="Lljm\HomeBundle\Entity\Meter", cascade={"persist"})
    * @Assert\NotBlank()
    */
    private $meterid;

    /**
     * @var integer
     *
     * @ORM\Column(name="metervalue", type="integer")
     */
    public $metervalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="consumption", type="integer", nullable=true)
     */
    private $consumption;

    /**
     * @var string
     *
     * @ORM\Column(name="yearweek", type="string", length=20, nullable=true)
     */
    private $yearweek;

    /**
     * @var string
     *
     * @ORM\Column(name="yearmonth", type="string", length=20, nullable=true)
     */
    private $yearmonth;

    /**
     * @var string
     *
     * @ORM\Column(name="monthmonth", type="string", length=20, nullable=true)
     */
    private $monthmonth;


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
     * @return Gaslog
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
     * Set metervalue
     *
     * @param integer $metervalue
     * @return Gaslog
     */
    public function setMetervalue($metervalue)
    {
        $this->metervalue = $metervalue;

        return $this;
    }

    /**
     * Get metervalue
     *
     * @return integer 
     */
    public function getMetervalue()
    {
        return $this->metervalue;
    }

    /**
     * Set meterid
     *
     * @param \Lljm\HomeBundle\Entity\Meter $meterid
     * @return Gaslog
     */
    public function setMeterid(\Lljm\HomeBundle\Entity\Meter $meterid = null)
    {
        $this->meterid = $meterid;

        return $this;
    }

    /**
     * Get meterid
     *
     * @return \Lljm\HomeBundle\Entity\Meter 
     */
    public function getMeterid()
    {
        return $this->meterid;
    }

    /**
     * Set consumption
     *
     * @param integer $consumption
     * @return Gaslog
     */
    public function setConsumption($consumption)
    {
        $this->consumption = $consumption;

        return $this;
    }

    /**
     * Get consumption
     *
     * @return integer 
     */
    public function getConsumption()
    {
        return $this->consumption;
    }



    /**
     * Set yearweek
     *
     * @param string $yearweek
     * @return Gaslog
     */
    public function setYearweek($yearweek)
    {
        $this->yearweek = $yearweek;

        return $this;
    }

    /**
     * Get yearweek
     *
     * @return string 
     */
    public function getYearweek()
    {
        return $this->yearweek;
    }

    /**
     * Set yearmonth
     *
     * @param string $yearmonth
     * @return Gaslog
     */
    public function setYearmonth($yearmonth)
    {
        $this->yearmonth = $yearmonth;

        return $this;
    }

    /**
     * Get yearmonth
     *
     * @return string 
     */
    public function getYearmonth()
    {
        return $this->yearmonth;
    }

    /**
     * Set monthmonth
     *
     * @param string $monthmonth
     * @return Gaslog
     */
    public function setMonthmonth($monthmonth)
    {
        $this->monthmonth = $monthmonth;

        return $this;
    }

    /**
     * Get monthmonth
     *
     * @return string 
     */
    public function getMonthmonth()
    {
        return $this->monthmonth;
    }
}
