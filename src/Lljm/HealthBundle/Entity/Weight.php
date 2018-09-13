<?php

namespace Lljm\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weight
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HealthBundle\Entity\WeightRepository")
 */
class Weight
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
     * @ORM\Column(name="weight_value", type="decimal")
     */
    private $weightValue;


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
     * Set weightValue
     *
     * @param string $weightValue
     * @return Weight
     */
    public function setWeightValue($weightValue)
    {
        $this->weightValue = $weightValue;

        return $this;
    }

    /**
     * Get weightValue
     *
     * @return string 
     */
    public function getWeightValue()
    {
        return $this->weightValue;
    }

    /**
     * Set dateRead
     *
     * @param \DateTime $dateRead
     * @return Weight
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
     * @return Weight
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
