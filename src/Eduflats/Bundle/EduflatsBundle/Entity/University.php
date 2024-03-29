<?php
namespace Eduflats\Bundle\EduflatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * University
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class University {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\OneToMany(targetEntity="Options", mappedBy="university")
     */
    protected $options;
    
    /**
     * @ORM\OneToMany(targetEntity="PropertyCategory", mappedBy="university")
     */
    protected $propertyCategory;

    /**
     * @ORM\OneToMany(targetEntity="Campus", mappedBy="university")
     */
    protected $campus;
    
    /**
     * @ORM\OneToMany(targetEntity="Client", mappedBy="university")
     */
    protected $client;
    
    /**
     * @ORM\OneToMany(targetEntity="Property", mappedBy="university")
     */
    protected $property;

    /**
     * @ORM\OneToOne(targetEntity="ListingSetting", mappedBy="university")
     */
    protected $listingSetting;
    
    /**
     * @ORM\OneToOne(targetEntity="WebsiteSetting", mappedBy="university")
     */
    protected $websiteSetting;
    
    /**
     * @ORM\OneToOne(targetEntity="Plan", inversedBy="university")
     * @ORM\JoinColumn(name="plan_id", referencedColumnName="id")
     */
    protected $plan;

    /**
     * @var string
     * name of university
     * @ORM\Column(name="universityname", type="string", length=255, nullable=false)
     */
    protected $tUniversityName;

    /**
     * @var string 
     * holds the locale used in internationalization and localization
     * @ORM\Column(name="locale", type="string", length=255, nullable=true)
     */
    protected $locale;
    
    /**
     * @var string
     * subdomain for university
     * @ORM\Column(name="subdomainname", type="string", length=255, nullable=false)
     */
    protected $tSubdomainName;

    /**
     * @var \DateTime
     * subdomain and details validity end date
     * @ORM\Column(name="validity", type="datetime", nullable=false)
     */
    protected $dValidity;

    /**
     * @var boolean
     * indicates if univeristy is blacklisted
     * @ORM\Column(name="blacklisted", type="boolean", nullable=false)
     */
    protected $bBlacklisted;

    /**
     * @var \DateTime
     * Date the subdomain and details were formed
     * @ORM\Column(name="createdat", type="datetime", nullable=false)
     */
    protected $dCreatedAt;

    /**
     * @var \DateTime
     * date the university and other details were created
     * @ORM\Column(name="updatedat", type="datetime", nullable=true)
     */
    protected $dUpdatedAt;

    /**
     * @var boolean
     * true if subdomain and all services are useable
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    protected $bEnabled;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->campus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->client = new \Doctrine\Common\Collections\ArrayCollection();
        $this->property = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Add campus
     *
     * @param Campus $campus
     * @return University
     */
    public function addCampus(Campus $campus)
    {
        $this->campus[] = $campus;

        return $this;
    }

    /**
     * Remove campus
     *
     * @param Campus $campus
     */
    public function removeCampus(Campus $campus)
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
     * Set tUniversityName
     *
     * @param string $tUniversityName
     * @return University
     */
    public function setTUniversityName($tUniversityName)
    {
        $this->tUniversityName = $tUniversityName;

        return $this;
    }

    /**
     * Get tUniversityName
     *
     * @return string 
     */
    public function getTUniversityName()
    {
        return $this->tUniversityName;
    }

    /**
     * Set tSubdomainName
     *
     * @param string $tSubdomainName
     * @return University
     */
    public function setTSubdomainName($tSubdomainName)
    {
        $this->tSubdomainName = $tSubdomainName;

        return $this;
    }

    /**
     * Get tSubdomainName
     *
     * @return string 
     */
    public function getTSubdomainName()
    {
        return $this->tSubdomainName;
    }

    /**
     * Set dValidity
     *
     * @param \DateTime $dValidity
     * @return University
     */
    public function setDValidity($dValidity)
    {
        $this->dValidity = $dValidity;

        return $this;
    }

    /**
     * Get dValidity
     *
     * @return \DateTime 
     */
    public function getDValidity()
    {
        return $this->dValidity;
    }

    /**
     * Set bBlacklisted
     *
     * @param boolean $bBlacklisted
     * @return University
     */
    public function setBBlacklisted($bBlacklisted)
    {
        $this->bBlacklisted = $bBlacklisted;

        return $this;
    }

    /**
     * Get bBlacklisted
     *
     * @return boolean 
     */
    public function getBBlacklisted()
    {
        return $this->bBlacklisted;
    }

    /**
     * Set dCreatedAt
     *
     * @param \DateTime $dCreatedAt
     * @return University
     */
    public function setDCreatedAt($dCreatedAt)
    {
        $this->dCreatedAt = $dCreatedAt;

        return $this;
    }

    /**
     * Get dCreatedAt
     *
     * @return \DateTime 
     */
    public function getDCreatedAt()
    {
        return $this->dCreatedAt;
    }

    /**
     * Set dUpdatedAt
     *
     * @param \DateTime $dUpdatedAt
     * @return University
     */
    public function setDUpdatedAt($dUpdatedAt)
    {
        $this->dUpdatedAt = $dUpdatedAt;

        return $this;
    }

    /**
     * Get dUpdatedAt
     *
     * @return \DateTime 
     */
    public function getDUpdatedAt()
    {
        return $this->dUpdatedAt;
    }

    /**
     * Set bEnabled
     *
     * @param boolean $bEnabled
     * @return University
     */
    public function setBEnabled($bEnabled)
    {
        $this->bEnabled = $bEnabled;

        return $this;
    }

    /**
     * Get bEnabled
     *
     * @return boolean 
     */
    public function getBEnabled()
    {
        return $this->bEnabled;
    }


    /**
     * Add property
     *
     * @param Property $property
     * @return University
     */
    public function addProperty(Property $property)
    {
        $this->property[] = $property;

        return $this;
    }

    /**
     * Remove property
     *
     * @param Property $property
     */
    public function removeProperty(Property $property)
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
     * Add client
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\Client $client
     * @return University
     */
    public function addClient(\Eduflats\Bundle\EduflatsBundle\Entity\Client $client)
    {
        $this->client[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\Client $client
     */
    public function removeClient(\Eduflats\Bundle\EduflatsBundle\Entity\Client $client)
    {
        $this->client->removeElement($client);
    }

    /**
     * Get client
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set listingSetting
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\ListingSetting $listingSetting
     * @return University
     */
    public function setListingSetting(\Eduflats\Bundle\EduflatsBundle\Entity\ListingSetting $listingSetting = null)
    {
        $this->listingSetting = $listingSetting;

        return $this;
    }

    /**
     * Get listingSetting
     *
     * @return \Eduflats\Bundle\EduflatsBundle\Entity\ListingSetting 
     */
    public function getListingSetting()
    {
        return $this->listingSetting;
    }

    /**
     * Set websiteSetting
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\WebsiteSetting $websiteSetting
     * @return University
     */
    public function setWebsiteSetting(\Eduflats\Bundle\EduflatsBundle\Entity\WebsiteSetting $websiteSetting = null)
    {
        $this->websiteSetting = $websiteSetting;

        return $this;
    }

    /**
     * Get websiteSetting
     *
     * @return \Eduflats\Bundle\EduflatsBundle\Entity\WebsiteSetting 
     */
    public function getWebsiteSetting()
    {
        return $this->websiteSetting;
    }


    /**
     * Set propertyCategory
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\PropertyCategory $propertyCategory
     * @return University
     */
    public function setPropertyCategory(\Eduflats\Bundle\EduflatsBundle\Entity\PropertyCategory $propertyCategory = null)
    {
        $this->propertyCategory = $propertyCategory;

        return $this;
    }

    /**
     * Get propertyCategory
     *
     * @return \Eduflats\Bundle\EduflatsBundle\Entity\PropertyCategory 
     */
    public function getPropertyCategory()
    {
        return $this->propertyCategory;
    }

    /**
     * Add propertyCategory
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\PropertyCategory $propertyCategory
     * @return University
     */
    public function addPropertyCategory(\Eduflats\Bundle\EduflatsBundle\Entity\PropertyCategory $propertyCategory)
    {
        $this->propertyCategory[] = $propertyCategory;

        return $this;
    }

    /**
     * Remove propertyCategory
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\PropertyCategory $propertyCategory
     */
    public function removePropertyCategory(\Eduflats\Bundle\EduflatsBundle\Entity\PropertyCategory $propertyCategory)
    {
        $this->propertyCategory->removeElement($propertyCategory);
    }

    /**
     * Set plan
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\Plan $plan
     * @return University
     */
    public function setPlan(\Eduflats\Bundle\EduflatsBundle\Entity\Plan $plan = null)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return \Eduflats\Bundle\EduflatsBundle\Entity\Plan 
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Add options
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\Options $options
     * @return University
     */
    public function addOption(\Eduflats\Bundle\EduflatsBundle\Entity\Options $options)
    {
        $this->options[] = $options;

        return $this;
    }

    /**
     * Remove options
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\Options $options
     */
    public function removeOption(\Eduflats\Bundle\EduflatsBundle\Entity\Options $options)
    {
        $this->options->removeElement($options);
    }

    /**
     * Get options
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set locale
     *
     * @param string $locale
     * @return University
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string 
     */
    public function getLocale()
    {
        return $this->locale;
    }
}
