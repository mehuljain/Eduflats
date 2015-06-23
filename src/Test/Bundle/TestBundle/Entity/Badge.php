<?php

namespace Test\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badge
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Test\Bundle\TestBundle\Entity\BadgeRepository")
 */
class Badge
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
     * @ORM\ManyToOne(targetEntity="University", inversedBy="badge")
     * @ORM\JoinColumn(name="university_id", referencedColumnName="id")
     */
    private $university;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return Badge
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set university
     *
     * @param \Test\Bundle\TestBundle\Entity\University $university
     * @return Badge
     */
    public function setUniversity(\Test\Bundle\TestBundle\Entity\University $university = null)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get university
     *
     * @return \Test\Bundle\TestBundle\Entity\University 
     */
    public function getUniversity()
    {
        return $this->university;
    }
}
