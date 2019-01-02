<?php

namespace Lljm\TasksBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="Lljm\TasksBundle\Repository\TaskRepository")
 */
class Task
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="taskdesc", type="string", length=255)
     */
    private $taskdesc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date")
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date")
     */
    private $dateEnd;

    /**
     * @var bool
     *
     * @ORM\Column(name="completed", type="boolean")
     */
    private $completed;

    /**
    * @ORM\ManyToOne(targetEntity="Lljm\UserBundle\Entity\User", cascade={"persist"})
    */
    private $user;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set taskdesc
     *
     * @param string $taskdesc
     *
     * @return Task
     */
    public function setTaskDesc($taskdesc)
    {
        $this->taskdesc = $taskdesc;

        return $this;
    }

    /**
     * Get taskdesc
     *
     * @return string
     */
    public function getTaskDesc()
    {
        return $this->taskdesc;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return Task
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return Task
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set completed
     *
     * @param boolean $completed
     *
     * @return Task
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Get completed
     *
     * @return bool
     */
    public function getCompleted()
    {
        return $this->completed;
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

