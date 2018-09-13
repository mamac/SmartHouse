<?php

namespace Lljm\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Height
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HealthBundle\Entity\HeightRepository")
 */
class Height
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
     * @ORM\Column(name="height_value", type="decimal")
     */
    private $heightValue;

    /**
    * @ORM\ManyToOne(targetEntity="Lljm\UserBundle\Entity\User", cascade={"persist"})
    */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_read", type="date")
     */
    private $dateRead;




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
     * Set heightValue
     *
     * @param string $heightValue
     * @return Height
     */
    public function setHeightValue($heightValue)
    {
        $this->heightValue = $heightValue;

        return $this;
    }

    /**
     * Get heightValue
     *
     * @return string 
     */
    public function getHeightValue()
    {
        return $this->heightValue;
    }

    /**
     * Set dateRead
     *
     * @param \DateTime $dateRead
     * @return Height
     */
    public function setDateRead($dateRead)
    {
        $this->dateRead = $dateRead;

        return $this;
    }

    /**
     * Get dateRead
     *
     * @return \DateTime 
     */
    public function getDateRead()
    {
        return $this->dateRead;
    }

    /**
     * Set user
     *
     * @param \Lljm\UserBundle\Entity\User $user
     * @return Height
     */
    public function setUser(\Lljm\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Lljm\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
