<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\ResourceRepository")
 */
class Resource
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
     * @ORM\Column(name="resourcename", type="string", length=255)
     */
    private $resourcename;


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
     * Set resourcename
     *
     * @param string $resourcename
     * @return Resource
     */
    public function setResourcename($resourcename)
    {
        $this->resourcename = $resourcename;

        return $this;
    }

    /**
     * Get resourcename
     *
     * @return string 
     */
    public function getResourcename()
    {
        return $this->resourcename;
    }
}
