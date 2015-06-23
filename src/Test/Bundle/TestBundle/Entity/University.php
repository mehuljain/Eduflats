<?php

namespace Test\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * University
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Test\Bundle\TestBundle\Entity\UniversityRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class University
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
     * @ORM\OneToMany(targetEntity="Admin", mappedBy="university")
     */
    private $admin;
    
    /**
     * @ORM\OneToMany(targetEntity="Student", mappedBy="university")
     */
    private $student;
    
    /**
     * @ORM\OneToMany(targetEntity="PropertyProvider", mappedBy="university")
     */
    private $propertyProvider;
    
    /**
     * @ORM\OneToMany(targetEntity="Campus", mappedBy="university")
     */
    private $campus;
    
    /**
     * @ORM\OneToMany(targetEntity="Property", mappedBy="university")
     */
    private $property;
    
    /**
     * @ORM\OneToMany(targetEntity="Badge", mappedBy="university")
     */
    private $badge;
    
    /**
     * @ORM\OneToMany(targetEntity="Tag", mappedBy="university")
     */
    private $tag;
    
    public function __construct() {
        $this->student = new ArrayCollection();
        $this->propertyProvider = new ArrayCollection();
        $this->campus = new ArrayCollection();
        $this->property = new ArrayCollection();
        $this->admin = new ArrayCollection();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *                  min=3,
     *                  max=35,
     *                  minMessage= "Name Field should contains at least 3 characters",
     *                  maxMessage = "Name Field Cannot contain more than 35 characters"
     *               )
     * @Assert\Regex(pattern="/[^a-z\s-]/i", match=false , message="Name can only contain letters")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="subdomain", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *                  min=3,
     *                  max=15,
     *                  minMessage= "Subdomains should contains at least 3 characters",
     *                  maxMessage = "Subdomains Cannot contain more than 15 characters"
     *               )
     * @Assert\Regex(pattern="/[^a-z\s-]/i", match=false , message="subdomains can only contain letters")
     */
    private $subdomain;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;


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
     * Set id
     *
     * @param string $id
     * @return id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Set name
     *
     * @param string $name
     * @return University
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
     * Set subdomain
     *
     * @param string $subdomain
     * @return University
     */
    public function setSubdomain($subdomain)
    {
        $this->subdomain = $subdomain;

        return $this;
    }

    /**
     * Get subdomain
     *
     * @return string 
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return University
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Add student
     *
     * @param \Test\Bundle\TestBundle\Entity\Student $student
     * @return University
     */
    public function addStudent(\Test\Bundle\TestBundle\Entity\Student $student)
    {
        $this->student[] = $student;

        return $this;
    }

    /**
     * Remove Student
     *
     * @param \Test\Bundle\TestBundle\Entity\Student $student
     */
    public function removeStudent(\Test\Bundle\TestBundle\Entity\Student $student)
    {
        $this->student->removeElement($student);
    }

    /**
     * Get student
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Add propertyProvider
     *
     * @param \Test\Bundle\TestBundle\Entity\PropertyProvider $propertyProvider
     * @return University
     */
    public function addPropertyProvider(\Test\Bundle\TestBundle\Entity\PropertyProvider $propertyProvider)
    {
        $this->propertyProvider[] = $propertyProvider;

        return $this;
    }

    /**
     * Remove propertyProvider
     *
     * @param \Test\Bundle\TestBundle\Entity\PropertyProvider $propertyProvider
     */
    public function removePropertyProvider(\Test\Bundle\TestBundle\Entity\PropertyProvider $propertyProvider)
    {
        $this->propertyProvider->removeElement($propertyProvider);
    }

    /**
     * Get propertyProvider
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPropertyProvider()
    {
        return $this->propertyProvider;
    }

    /**
     * Add campus
     *
     * @param \Test\Bundle\TestBundle\Entity\Campus $campus
     * @return University
     */
    public function addCampus(\Test\Bundle\TestBundle\Entity\Campus $campus)
    {
        $this->campus[] = $campus;

        return $this;
    }

    /**
     * Remove campus
     *
     * @param \Test\Bundle\TestBundle\Entity\Campus $campus
     */
    public function removeCampus(\Test\Bundle\TestBundle\Entity\Campus $campus)
    {
        $this->campus->removeElement($campus);
    }

    /**
     * Get campus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCampus()
    {
        return $this->campus;
    }

    /**
     * Add property
     *
     * @param \Test\Bundle\TestBundle\Entity\Property $property
     * @return University
     */
    public function addProperty(\Test\Bundle\TestBundle\Entity\Property $property)
    {
        $this->property[] = $property;

        return $this;
    }

    /**
     * Remove property
     *
     * @param \Test\Bundle\TestBundle\Entity\Property $property
     */
    public function removeProperty(\Test\Bundle\TestBundle\Entity\Property $property)
    {
        $this->property->removeElement($property);
    }

    /**
     * Get property
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Add admin
     *
     * @param \Test\Bundle\TestBundle\Entity\Admin $admin
     * @return University
     */
    public function addAdmin(\Test\Bundle\TestBundle\Entity\Admin $admin)
    {
        $this->admin[] = $admin;

        return $this;
    }

    /**
     * Remove admin
     *
     * @param \Test\Bundle\TestBundle\Entity\Admin $admin
     */
    public function removeAdmin(\Test\Bundle\TestBundle\Entity\Admin $admin)
    {
        $this->admin->removeElement($admin);
    }

    /**
     * Get admin
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Add badge
     *
     * @param \Test\Bundle\TestBundle\Entity\Badge $badge
     * @return University
     */
    public function addBadge(\Test\Bundle\TestBundle\Entity\Badge $badge)
    {
        $this->badge[] = $badge;

        return $this;
    }

    /**
     * Remove badge
     *
     * @param \Test\Bundle\TestBundle\Entity\Badge $badge
     */
    public function removeBadge(\Test\Bundle\TestBundle\Entity\Badge $badge)
    {
        $this->badge->removeElement($badge);
    }

    /**
     * Get badge
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * Add tag
     *
     * @param \Test\Bundle\TestBundle\Entity\Tag $tag
     * @return University
     */
    public function addTag(\Test\Bundle\TestBundle\Entity\Tag $tag)
    {
        $this->tag[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \Test\Bundle\TestBundle\Entity\Tag $tag
     */
    public function removeTag(\Test\Bundle\TestBundle\Entity\Tag $tag)
    {
        $this->tag->removeElement($tag);
    }

    /**
     * Get tag
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTag()
    {
        return $this->tag;
    }
}
