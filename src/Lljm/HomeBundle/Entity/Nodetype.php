<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nodetype
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\NodetypeRepository")
 */
class Nodetype
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
     * @ORM\Column(name="nodetype", type="string", length=255)
     */
    private $nodetype;


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
     * Set nodetype
     *
     * @param string $nodetype
     * @return Nodetype
     */
    public function setNodetype($nodetype)
    {
        $this->nodetype = $nodetype;

        return $this;
    }

    /**
     * Get nodetype
     *
     * @return string 
     */
    public function getNodetype()
    {
        return $this->nodetype;
    }
}
