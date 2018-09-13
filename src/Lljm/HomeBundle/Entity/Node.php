<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Node
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\NodeRepository")
 * @UniqueEntity(fields={"nodeguid"}, message="A node with this GUID already exists.")
 */
class Node
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
     * @ORM\Column(name="nodeguid", type="string", length=255)
     */
    private $nodeguid;

    /**
    * @ORM\ManyToOne(targetEntity="Lljm\HomeBundle\Entity\Zone", cascade={"persist"})
    * @Assert\NotBlank()
    */
    private $nodezone;

    /**
    * @ORM\ManyToOne(targetEntity="Lljm\HomeBundle\Entity\Subzone", cascade={"persist"})
    * @Assert\NotBlank()
    */
    private $nodesubzone;

    /**
    * @ORM\ManyToOne(targetEntity="Lljm\HomeBundle\Entity\Nodetype", cascade={"persist"})
    * @Assert\NotBlank()
    */
    private $nodetype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastheartbeat", type="datetime", nullable = true)
     */
    private $lastheartbeat;

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
     * Set nodeguid
     *
     * @param string $nodeguid
     * @return Node
     */
    public function setNodeguid($nodeguid)
    {
        $this->nodeguid = $nodeguid;

        return $this;
    }

    /**
     * Get nodeguid
     *
     * @return string 
     */
    public function getNodeguid()
    {
        return $this->nodeguid;
    }

    /**
     * Set nodezone
     *
     * @param \Lljm\HomeBundle\Entity\Zone $nodezone
     * @return Node
     */
    public function setNodezone(\Lljm\HomeBundle\Entity\Zone $nodezone = null)
    {
        $this->nodezone = $nodezone;

        return $this;
    }

    /**
     * Get nodezone
     *
     * @return \Lljm\HomeBundle\Entity\Zone 
     */
    public function getNodezone()
    {
        return $this->nodezone;
    }

    /**
     * Set nodetype
     *
     * @param \Lljm\HomeBundle\Entity\Nodetype $nodetype
     * @return Node
     */
    public function setNodetype(\Lljm\HomeBundle\Entity\Nodetype $nodetype = null)
    {
        $this->nodetype = $nodetype;

        return $this;
    }

    /**
     * Get nodetype
     *
     * @return \Lljm\HomeBundle\Entity\Nodetype 
     */
    public function getNodetype()
    {
        return $this->nodetype;
    }

    /**
     * Set nodesubzone
     *
     * @param \Lljm\HomeBundle\Entity\Subzone $nodesubzone
     * @return Node
     */
    public function setNodesubzone(\Lljm\HomeBundle\Entity\Subzone $nodesubzone = null)
    {
        $this->nodesubzone = $nodesubzone;

        return $this;
    }

    /**
     * Get nodesubzone
     *
     * @return \Lljm\HomeBundle\Entity\Subzone 
     */
    public function getNodesubzone()
    {
        return $this->nodesubzone;
    }

    /**
     * Set lastheartbeat
     *
     * @param \DateTime $lastheartbeat
     * @return Node
     */
    public function setLastheartbeat($lastheartbeat)
    {
        $this->lastheartbeat = $lastheartbeat;

        return $this;
    }

    /**
     * Get lastheartbeat
     *
     * @return \DateTime 
     */
    public function getLastheartbeat()
    {
        return $this->lastheartbeat;
    }
}
