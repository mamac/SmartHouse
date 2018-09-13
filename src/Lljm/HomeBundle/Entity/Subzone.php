<?php

namespace Lljm\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subzone
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lljm\HomeBundle\Entity\SubzoneRepository")
 */
class Subzone
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
     * @ORM\Column(name="subzonename", type="string", length=255)
     */
    private $subzonename;


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
     * Set subzonename
     *
     * @param string $subzonename
     * @return Subzone
     */
    public function setSubzonename($subzonename)
    {
        $this->subzonename = $subzonename;

        return $this;
    }

    /**
     * Get subzonename
     *
     * @return string 
     */
    public function getSubzonename()
    {
        return $this->subzonename;
    }
}
