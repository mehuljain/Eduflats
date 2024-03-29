<?php
namespace Eduflats\Bundle\EduflatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Property
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Property
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
     * @ORM\OneToOne(targetEntity="PropertyCategory", mappedBy="property")
     */
    protected $propertyCategory;
    
    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="property")
     * @ORM\JoinColumn(name="eduflats_user_id", referencedColumnName="id")
     */
    protected $client;

    /**
     * @ORM\ManyToOne(targetEntity="University", inversedBy="property")
     * @ORM\JoinColumn(name="university_id", referencedColumnName="id")
     */
    protected $university;

    /**
     * @ORM\ManyToMany(targetEntity="Campus", inversedBy="property")
     * @ORM\JoinTable(name="campus_property")
     */
    protected $Campus;

    /**
     * @ORM\ManyToMany(targetEntity="Tag")
     */
    protected $tag;
        
    /**
     * @ORM\Column(name="badges", type="array")
     */
    protected $badges;

    /**
     * @Assert\Length(
     *                  min=10,
     *                  max=200,
     *                  minMessage= "Property Description must be more discriptive",
     *                  maxMessage = "Name Field Cannot contain more than 200 characters"
     *               )
     * @Assert\Regex(pattern="/[^a-z\s-]/i", match=false , message="Name can only contain letters")
     * @var type string
     * Verbal description of property
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    protected $tPropertyDescription;
    
    /**
     * @var type integer
     * holds index value of availability status(eg:- redy to move in, under construction, available shortly)
     * @ORM\Column(name="availabilitystatus", type="integer", nullable=true)
     */
    protected $nAvailabilityStatus;
    
    /**
     * @var type date
     * date available to move in
     * @ORM\Column(name="availablefrom", type="datetime", nullable=true)
     */
    protected $dAvailableFrom;
    
    /**
     * @var type integer
     * max staying period
     * @ORM\Column(name="monthsofoccupancy", type="integer", nullable=true)
     */
    protected $nMonthsOfOccupancy;
    
    /**
     * @var type integer
     * number of bedroom
     * @ORM\Column(name="bedroom", type="integer", nullable=true)
     */
    protected $nBedroom;
    
    /**
     * @var type integer
     * number of bathroom
     * @ORM\Column(name="bathroom", type="integer", nullable=true)
     */
    protected $nBathroom;
    
    /**
     * @var type integer
     * number of total floors
     * @ORM\Column(name="totalfloors", type="integer", nullable=true)
     */
    protected $nTotalFloors;
    
    /**
     * @var type integer
     * number of flor number
     * @ORM\Column(name="floornumber", type="integer", nullable=true)
     */
    protected $nFloorNumber;
    
    /**
     * @var type integer
     * holds furnished status index from fixture(eg:- fully furnished, semifurnished, unfurnished)
     * @ORM\Column(name="furnishedstatus", type="integer", nullable=true)
     */
    protected $nFurnishedStatus;
    
    /**
     * @var type integer
     * number of beds
     * @ORM\Column(name="beds", type="integer", nullable=true)
     */
    protected $nBeds;
    
    /**
     * @var type integer
     * max number of occupants allowed
     * @ORM\Column(name="maximumoccupants", type="integer", nullable=true)
     */
    protected $nMaximumOccupants;
    
    /**
     * @var type integer
     * price per month
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    protected $nPrice;
    
    /**
     * @var type integer
     * Maintainance Charge
     * @ORM\Column(name="maintainancecharge", type="integer", nullable=true)
     */
    protected $nMaintainanceCharge;
    
    /**
     * @var type boolean
     * indicates if property can be viewed/responded by brokers
     * @ORM\Column(name="borkerresponse", type="boolean", nullable=true)
     */
    protected $bBrokersResponse;

    /**
     * @var type integer
     * total property area in square feet
     * @ORM\Column(name="sqftcovered", type="integer", nullable=true)
     */
    protected $nSQFTcovered;

    /**
     * @var type integer
     * number of unique visitors to property details page
     * @ORM\Column(name="views", type="integer", nullable=true)
     */
    protected $nViews;
    
    /**
     * @var type integer
     * 5 star rating for property, decided by viewers
     * @ORM\Column(name="starrating", type="integer", nullable=true)
     */
    protected $nStarRating;
    
    /**
     * @var type integer
     * @ORM\Column(name="latitude", type="integer", nullable=true)
     */
    protected $nLatitude;
    
    /**
     * @var type integer
     * @ORM\Column(name="longitude", type="integer", nullable=true)
     */
    protected $nLongitude;
    
    /**
     * @var type boolean
     * indicates if contacts details can be displayed to public
     * @ORM\Column(name="displaycontactdetails", type="boolean", nullable=true)
     */
    protected $bDisplayContactDetails;
    
    /**
     * @Assert\Length(
     *                  min=3,
     *                  max=35,
     *                  minMessage= "Title should be more descriptive",
     *                  maxMessage = "Title Cannot contain more than 35 characters"
     *               )
     * @Assert\Regex(pattern="/[^a-z\s-]/i", match=false , message="Name can only contain letters")
     * @var type string
     * address title
     * @ORM\Column(name="addresstitle", type="string", length=255, nullable=true)
     */
    protected $tAddressTitle;
    
    /**
     * @Assert\Length(
     *                  min=3,
     *                  max=100,
     *                  minMessage= "Address should be more descriptive",
     *                  maxMessage = "address Cannot contain more than 100 characters"
     *               )
     * @Assert\Regex(pattern="/[^a-z\s-]/i", match=false , message="Name can only contain letters")
     * @var type string
     * address
     * @ORM\Column(name="addressline1", type="string", length=255, nullable=true)
     */
    protected $tAddressLine1;
    
    /**
     * @Assert\Length(
     *                  min=3,
     *                  max=100,
     *                  minMessage= "Address should be more descriptive",
     *                  maxMessage = "address Cannot contain more than 100 characters"
     *               )
     * @Assert\Regex(pattern="/[^a-z\s-]/i", match=false , message="Name can only contain letters")
     * @var type string
     * address
     * @ORM\Column(name="addressline2", type="string", length=255, nullable=true)
     */
    protected $tAddressLine2;
    
    
    /**
     * @var type string
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    protected $tCity;
    
     /**
     * @var type string
     * @ORM\Column(name="province", type="string", length=255, nullable=true)
     */
    protected $tProvince;
    
    /**
     * @var type string
     * @ORM\Column(name="zip", type="string", length=255, nullable=true)
     */
    protected $tZipCode;
    
    /**
     * @var type integer
     * @ORM\Column(name="country", type="integer", length=9, nullable=true)
     */
    protected $nCountry;
    
    /**
     * @var type boolean
     * true if approved for display, false if rejected
     * @ORM\Column(name="isapprovednotrejected", type="boolean", nullable=true)
     */
    protected $isApprovedNotRejected;
    
    /**
     * @var type boolean
     * true if active, false if expired
     * @ORM\Column(name="isactivenotexpired", type="boolean", nullable=true)
     */
    protected $isActiveNotExpired;
    
    /**
     * @var type string
     * verbal description for rejecting to approve property
     * @ORM\Column(name="nonapprovalreason", type="string", length=255, nullable=true)
     */
    protected $tNonApprovalReason;
    
    /**
     * @var type \Datetime
     * date property approval was requested by user
     * @ORM\Column(name="approvalrequestedon", type="datetime", nullable=true)
     */
    protected $dApprovalRequestedOn;
    
    /**
     * @var type \Datetime
     * date of approval for display
     * @ORM\Column(name="approvedon", type="datetime", nullable=true)
     */
    protected $dApprovedOn;
    
    /**
     * @var type boolean
     * indicates if property is blacklisted
     * @ORM\Column(name="isblacklisted", type="boolean", nullable=true)
     */
    protected $isBlacklisted;
    
    /**
     * @var type \DateTime
     * date the property was closed by user
     * @ORM\Column(name="closuredate", type="datetime", nullable=true)
     */
    protected $dClosureDate;
    
    /**
     * @var type \DateTime
     * date the property was created
     * @ORM\Column(name="createdat", type="datetime", nullable=true)
     */
    protected $dCreatedAt;
    
    /**
     * @var type \DateTime
     * date the porperty was updated
     * @ORM\Column(name="updatedat", type="datetime", nullable=true)
     */
    protected $dUpdatedAt;

    public function __construct() {
    	$this->tag = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Campus = new \Doctrine\Common\Collections\ArrayCollection(); 
        $this->category = new \Doctrine\Common\Collections\ArrayCollection(); 
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
     * Add Campus
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\Campus $campus
     * @return Property
     */
    public function addCampus(\Eduflats\Bundle\EduflatsBundle\Entity\Campus $campus)
    {
        $this->Campus[] = $campus;

        return $this;
    }

    /**
     * Remove Campus
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\Campus $campus
     */
    public function removeCampus(\Eduflats\Bundle\EduflatsBundle\Entity\Campus $campus)
    {
        $this->Campus->removeElement($campus);
    }

    /**
     * Get Campus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCampus()
    {
        return $this->Campus;
    }
    

    /**
     * Add tag
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\Tag $tag
     * @return Property
     */
    public function addTag(\Eduflats\Bundle\EduflatsBundle\Entity\Tag $tag)
    {
        $this->tag[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\Tag $tag
     */
    public function removeTag(\Eduflats\Bundle\EduflatsBundle\Entity\Tag $tag)
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

    /**
     * Set badges
     *
     * @param array $badges
     * @return Property
     */
    public function setBadges($badges)
    {
        $this->badges = $badges;
        return $this;
    }

    /**
     * Get badges
     *
     * @return array 
     */
    public function getBadges()
    {
        return $this->badges;
    }
    

    /**
     * Set university
     *
     * @param University $university
     * @return Property
     */
    public function setUniversity(University $university = null)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get university
     *
     * @return University 
     */
    public function getUniversity()
    {
        return $this->university;
    }
    
    /**
     * Set tPropertyDescription
     *
     * @param string $tPropertyDescription
     * @return Property
     */
    public function setTPropertyDescription($tPropertyDescription)
    {
        $this->tPropertyDescription = $tPropertyDescription;

        return $this;
    }

    /**
     * Get tPropertyDescription
     *
     * @return string 
     */
    public function getTPropertyDescription()
    {
        return $this->tPropertyDescription;
    }
    
    /**
     * Set nAvailabilityStatus
     *
     * @param integer $nAvailabilityStatus
     * @return Property
     */
    public function setNAvailabilityStatus($nAvailabilityStatus)
    {
        $this->nAvailabilityStatus = $nAvailabilityStatus;

        return $this;
    }

    /**
     * Get nAvailabilityStatus
     *
     * @return integer 
     */
    public function getNAvailabilityStatus()
    {
        return $this->nAvailabilityStatus;
    }
    
    /**
     * Set dAvailableFrom
     *
     * @param \DateTime $dAvailableFrom
     * @return Property
     */
    public function setDAvailableFrom(\DateTime $dAvailableFrom)
    {
        $this->dAvailableFrom = $dAvailableFrom;

        return $this;
    }

    /**
     * Get dAvailableFrom
     *
     * @return \DateTime 
     */
    public function getDAvailableFrom()
    {
        return $this->dAvailableFrom;
    }

    /**
     * Set nMonthsOfOccupancy
     *
     * @param integer $nMonthsOfOccupancy
     * @return Property
     */
    public function setNMonthsOfOccupancy($nMonthsOfOccupancy)
    {
        $this->nMonthsOfOccupancy = $nMonthsOfOccupancy;

        return $this;
    }

    /**
     * Get nMonthsOfOccupancy
     *
     * @return integer 
     */
    public function getNMonthsOfOccupancy()
    {
        return $this->nMonthsOfOccupancy;
    }

    /**
     * Set nBedroom
     *
     * @param integer $nBedroom
     * @return Property
     */
    public function setNBedroom($nBedroom)
    {
        $this->nBedroom = $nBedroom;

        return $this;
    }

    /**
     * Get nBedroom
     *
     * @return integer 
     */
    public function getNBedroom()
    {
        return $this->nBedroom;
    }

    /**
     * Set nBathroom
     *
     * @param integer $nBathroom
     * @return Property
     */
    public function setNBathroom($nBathroom)
    {
        $this->nBathroom = $nBathroom;

        return $this;
    }

    /**
     * Get nBathroom
     *
     * @return integer 
     */
    public function getNBathroom()
    {
        return $this->nBathroom;
    }

    /**
     * Set nBeds
     *
     * @param integer $nBeds
     * @return Property
     */
    public function setNBeds($nBeds)
    {
        $this->nBeds = $nBeds;

        return $this;
    }

    /**
     * Get nBeds
     *
     * @return integer 
     */
    public function getNBeds()
    {
        return $this->nBeds;
    }

    /**
     * Set nMaximumOccupants
     *
     * @param integer $nMaximumOccupants
     * @return Property
     */
    public function setNMaximumOccupants($nMaximumOccupants)
    {
        $this->nMaximumOccupants = $nMaximumOccupants;

        return $this;
    }

    /**
     * Get nMaximumOccupants
     *
     * @return integer 
     */
    public function getNMaximumOccupants()
    {
        return $this->nMaximumOccupants;
    }

    /**
     * Set nRentalAmount
     *
     * @param integer $nRentalAmount
     * @return Property
     */
    public function setNRentalAmount($nRentalAmount)
    {
        $this->nRentalAmount = $nRentalAmount;

        return $this;
    }

    /**
     * Get nRentalAmount
     *
     * @return integer 
     */
    public function getNRentalAmount()
    {
        return $this->nRentalAmount;
    }

    /**
     * Set nViews
     *
     * @param integer $nViews
     * @return Property
     */
    public function setNViews($nViews)
    {
        $this->nViews = $nViews;

        return $this;
    }

    /**
     * Get nViews
     *
     * @return integer 
     */
    public function getNViews()
    {
        return $this->nViews;
    }

    /**
     * Set nLatitude
     *
     * @param integer $nLatitude
     * @return Property
     */
    public function setNLatitude($nLatitude)
    {
        $this->nLatitude = $nLatitude;

        return $this;
    }

    /**
     * Get nLatitude
     *
     * @return integer 
     */
    public function getNLatitude()
    {
        return $this->nLatitude;
    }

    /**
     * Set nLongitude
     *
     * @param integer $nLongitude
     * @return Property
     */
    public function setNLongitude($nLongitude)
    {
        $this->nLongitude = $nLongitude;

        return $this;
    }

    /**
     * Get nLongitude
     *
     * @return integer 
     */
    public function getNLongitude()
    {
        return $this->nLongitude;
    }

    /**
     * Set bDisplayContactDetails
     *
     * @param boolean $bDisplayContactDetails
     * @return Property
     */
    public function setBDisplayContactDetails($bDisplayContactDetails)
    {
        $this->bDisplayContactDetails = $bDisplayContactDetails;

        return $this;
    }

    /**
     * Get bDisplayContactDetails
     *
     * @return boolean 
     */
    public function getBDisplayContactDetails()
    {
        return $this->bDisplayContactDetails;
    }

    /**
     * Set tAddressTitle
     *
     * @param string $tAddressTitle
     * @return Property
     */
    public function setTAddressTitle($tAddressTitle)
    {
        $this->tAddressTitle = $tAddressTitle;

        return $this;
    }

    /**
     * Get tAddressTitle
     *
     * @return string 
     */
    public function getTAddressTitle()
    {
        return $this->tAddressTitle;
    }

    /**
     * Set tAddressLine1
     *
     * @param string $tAddressLine1
     * @return Property
     */
    public function setTAddressLine1($tAddressLine1)
    {
        $this->tAddressLine1 = $tAddressLine1;

        return $this;
    }

    /**
     * Get tAddressLine1
     *
     * @return string 
     */
    public function getTAddressLine1()
    {
        return $this->tAddressLine1;
    }

    /**
     * Set tAddressLine2
     *
     * @param string $tAddressLine2
     * @return Property
     */
    public function setTAddressLine2($tAddressLine2)
    {
        $this->tAddressLine2 = $tAddressLine2;

        return $this;
    }

    /**
     * Get tAddressLine2
     *
     * @return string 
     */
    public function getTAddressLine2()
    {
        return $this->tAddressLine2;
    }

    /**
     * Set tCity
     *
     * @param string $tCity
     * @return Property
     */
    public function setTCity($tCity)
    {
        $this->tCity = $tCity;

        return $this;
    }

    /**
     * Get tCity
     *
     * @return string 
     */
    public function getTCity()
    {
        return $this->tCity;
    }

    /**
     * Set tProvince
     *
     * @param string $tProvince
     * @return Property
     */
    public function setTProvince($tProvince)
    {
        $this->tProvince = $tProvince;

        return $this;
    }

    /**
     * Get tProvince
     *
     * @return string 
     */
    public function getTProvince()
    {
        return $this->tProvince;
    }

    /**
     * Set tZipCode
     *
     * @param string $tZipCode
     * @return Property
     */
    public function setTZipCode($tZipCode)
    {
        $this->tZipCode = $tZipCode;

        return $this;
    }

    /**
     * Get tZipCode
     *
     * @return string 
     */
    public function getTZipCode()
    {
        return $this->tZipCode;
    }

    /**
     * Set nCountry
     *
     * @param integer $nCountry
     * @return Property
     */
    public function setNCountry($nCountry)
    {
        $this->nCountry = $nCountry;

        return $this;
    }

    /**
     * Get nCountry
     *
     * @return integer 
     */
    public function getNCountry()
    {
        return $this->nCountry;
    }

    
    /**
     * Set nTotalFloors
     *
     * @param integer $nTotalFloors
     * @return Property
     */
    public function setNTotalFloors($nTotalFloors)
    {
        $this->nTotalFloors = $nTotalFloors;

        return $this;
    }

    /**
     * Get nTotalFloors
     *
     * @return integer 
     */
    public function getNTotalFloors()
    {
        return $this->nTotalFloors;
    }

    /**
     * Set nFloorNumber
     *
     * @param integer $nFloorNumber
     * @return Property
     */
    public function setNFloorNumber($nFloorNumber)
    {
        $this->nFloorNumber = $nFloorNumber;

        return $this;
    }

    /**
     * Get nFloorNumber
     *
     * @return integer 
     */
    public function getNFloorNumber()
    {
        return $this->nFloorNumber;
    }

    /**
     * Set nFurnishedStatus
     *
     * @param integer $nFurnishedStatus
     * @return Property
     */
    public function setNFurnishedStatus($nFurnishedStatus)
    {
        $this->nFurnishedStatus = $nFurnishedStatus;

        return $this;
    }

    /**
     * Get nFurnishedStatus
     *
     * @return integer 
     */
    public function getNFurnishedStatus()
    {
        return $this->nFurnishedStatus;
    }

    /**
     * Set nPrice
     *
     * @param integer $nPrice
     * @return Property
     */
    public function setNPrice($nPrice)
    {
        $this->nPrice = $nPrice;

        return $this;
    }

    /**
     * Get nPrice
     *
     * @return integer 
     */
    public function getNPrice()
    {
        return $this->nPrice;
    }

    /**
     * Set nMaintainanceCharge
     *
     * @param integer $nMaintainanceCharge
     * @return Property
     */
    public function setNMaintainanceCharge($nMaintainanceCharge)
    {
        $this->nMaintainanceCharge = $nMaintainanceCharge;

        return $this;
    }

    /**
     * Get nMaintainanceCharge
     *
     * @return integer 
     */
    public function getNMaintainanceCharge()
    {
        return $this->nMaintainanceCharge;
    }

    /**
     * Set bBrokersResponse
     *
     * @param boolean $bBrokersResponse
     * @return Property
     */
    public function setBBrokersResponse($bBrokersResponse)
    {
        $this->bBrokersResponse = $bBrokersResponse;

        return $this;
    }

    /**
     * Get bBrokersResponse
     *
     * @return boolean 
     */
    public function getBBrokersResponse()
    {
        return $this->bBrokersResponse;
    }

    /**
     * Set nSQFTcovered
     *
     * @param integer $nSQFTcovered
     * @return Property
     */
    public function setNSQFTcovered($nSQFTcovered)
    {
        $this->nSQFTcovered = $nSQFTcovered;

        return $this;
    }

    /**
     * Get nSQFTcovered
     *
     * @return integer 
     */
    public function getNSQFTcovered()
    {
        return $this->nSQFTcovered;
    }

    /**
     * Set nStarRating
     *
     * @param integer $nStarRating
     * @return Property
     */
    public function setNStarRating($nStarRating)
    {
        $this->nStarRating = $nStarRating;

        return $this;
    }

    /**
     * Get nStarRating
     *
     * @return integer 
     */
    public function getNStarRating()
    {
        return $this->nStarRating;
    }

    /**
     * Set isApprovedNotRejected
     *
     * @param boolean $isApprovedNotRejected
     * @return Property
     */
    public function setIsApprovedNotRejected($isApprovedNotRejected)
    {
        $this->isApprovedNotRejected = $isApprovedNotRejected;

        return $this;
    }

    /**
     * Get isApprovedNotRejected
     *
     * @return boolean 
     */
    public function getIsApprovedNotRejected()
    {
        return $this->isApprovedNotRejected;
    }

    /**
     * Set isActiveNotExpired
     *
     * @param boolean $isActiveNotExpired
     * @return Property
     */
    public function setIsActiveNotExpired($isActiveNotExpired)
    {
        $this->isActiveNotExpired = $isActiveNotExpired;

        return $this;
    }

    /**
     * Get isActiveNotExpired
     *
     * @return boolean 
     */
    public function getIsActiveNotExpired()
    {
        return $this->isActiveNotExpired;
    }
    /**
     * Set tNonApprovalReason
     *
     * @param string $tNonApprovalReason
     * @return Property
     */
    public function setTNonApprovalReason($tNonApprovalReason)
    {
        $this->tNonApprovalReason = $tNonApprovalReason;

        return $this;
    }

    /**
     * Get tNonApprovalReason
     *
     * @return string 
     */
    public function getTNonApprovalReason()
    {
        return $this->tNonApprovalReason;
    }

    /**
     * Set dApprovalRequestedOn
     *
     * @param \DateTime $dApprovalRequestedOn
     * @return Property
     */
    public function setDApprovalRequestedOn($dApprovalRequestedOn)
    {
        $this->dApprovalRequestedOn = $dApprovalRequestedOn;

        return $this;
    }

    /**
     * Get dApprovalRequestedOn
     *
     * @return \DateTime 
     */
    public function getDApprovalRequestedOn()
    {
        return $this->dApprovalRequestedOn;
    }

    /**
     * Set dApprovedOn
     *
     * @param \DateTime $dApprovedOn
     * @return Property
     */
    public function setDApprovedOn($dApprovedOn)
    {
        $this->dApprovedOn = $dApprovedOn;

        return $this;
    }

    /**
     * Get dApprovedOn
     *
     * @return \DateTime 
     */
    public function getDApprovedOn()
    {
        return $this->dApprovedOn;
    }

    /**
     * Set isBlacklisted
     *
     * @param boolean $isBlacklisted
     * @return Property
     */
    public function setIsBlacklisted($isBlacklisted)
    {
        $this->isBlacklisted = $isBlacklisted;

        return $this;
    }

    /**
     * Get isBlacklisted
     *
     * @return boolean 
     */
    public function getIsBlacklisted()
    {
        return $this->isBlacklisted;
    }

    /**
     * Set dClosureDate
     *
     * @param \DateTime $dClosureDate
     * @return Property
     */
    public function setDClosureDate($dClosureDate)
    {
        $this->dClosureDate = $dClosureDate;

        return $this;
    }

    /**
     * Get dClosureDate
     *
     * @return \DateTime 
     */
    public function getDClosureDate()
    {
        return $this->dClosureDate;
    }

    /**
     * Set dCreatedAt
     *
     * @param \DateTime $dCreatedAt
     * @return Property
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
     * @return Property
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
     * Set client
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\Client $client
     * @return Property
     */
    public function setClient(\Eduflats\Bundle\EduflatsBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Eduflats\Bundle\EduflatsBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
     

    /**
     * Set propertyCategory
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\PropertyCategory $propertyCategory
     * @return Property
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
     * @return Property
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
}
