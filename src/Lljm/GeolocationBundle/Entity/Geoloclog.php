<?php

namespace Lljm\GeolocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Geoloclog
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\GeolocationBundle\Entity\GeoloclogRepository")
 */
class Geoloclog
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
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer")
     */
    private $userid;

     /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="altitude", type="float")
     */
    private $altitude;

    /**
     * @var float
     *
     * @ORM\Column(name="speed", type="float")
     */
    private $speed;

    /**
     * @var float
     *
     * @ORM\Column(name="direction", type="float")
     */
    private $direction;

    /**
     * @var float
     *
     * @ORM\Column(name="battery", type="float")
     */
    private $battery;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="logdate", type="datetime")
     */
    private $logdate;


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
     * Set userid
     *
     * @param integer $userid
     * @return Geoloclog
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Geoloclog
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Geoloclog
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set altitude
     *
     * @param float $altitude
     * @return Geoloclog
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get altitude
     *
     * @return float 
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set speed
     *
     * @param float $speed
     * @return Geoloclog
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return float 
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set direction
     *
     * @param float $direction
     * @return Geoloclog
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return float 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set battery
     *
     * @param float $battery
     * @return Geoloclog
     */
    public function setBattery($battery)
    {
        $this->battery = $battery;

        return $this;
    }

    /**
     * Get battery
     *
     * @return float 
     */
    public function getBattery()
    {
        return $this->battery;
    }

    /**
     * Set logdate
     *
     * @param \DateTime $logdate
     * @return Geoloclog
     */
    public function setLogdate($logdate)
    {
        $this->logdate = $logdate;

        return $this;
    }

    /**
     * Get logdate
     *
     * @return \DateTime 
     */
    public function getLogdate()
    {
        return $this->logdate;
    }
}
