<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-08-05 09:11:21.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\Property
 *
 * @ORM\Entity(repositoryClass="PropertyRepository")
 * @ORM\Table(name="property", indexes={@ORM\Index(name="fk_property_client1_idx", columns={"clientId"}), @ORM\Index(name="fk_property_propertyDetail1_idx", columns={"propertyDetail_id"}), @ORM\Index(name="fk_property_ownershipStatusRecord1_idx", columns={"ownershipStatusRecord_id"}), @ORM\Index(name="fk_property_university1_idx", columns={"university_id"})})
 */
class Property
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $clientId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $propertyDetail_id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $dAvailability;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nOccupancyPeriodInMonths;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nBedrooms;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nBathrooms;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nBeds;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nMaximumOccupants;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    protected $nRentAmount;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nViews;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    protected $nLatitude;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bDisplayContactDetails;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bNotify;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    protected $nLongitude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tAddressTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tStreet1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tStreet2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tCity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tState;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nCountry;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $tZipCode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tPropertyTitle;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $tPropertyDescription;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $dDisplayedOn;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $dClosureDate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bIsApproved;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $tNonapprovalReason;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bIsBlacklisted;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $tBlacklistedReason;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $dApprovalRequestDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $dApprovalDate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bIsDisplayed;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nApprovedBy;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dCreatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dUpdatedAt;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $ownershipStatusRecord_id;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $university_id;

    /**
     * @ORM\OneToMany(targetEntity="CampusHasProperty", mappedBy="property")
     * @ORM\JoinColumn(name="id", referencedColumnName="propertyId")
     */
    protected $campusHasProperties;

    /**
     * @ORM\OneToMany(targetEntity="HostLanguage", mappedBy="property")
     * @ORM\JoinColumn(name="id", referencedColumnName="propertyId")
     */
    protected $hostLanguages;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasAmenity", mappedBy="property")
     * @ORM\JoinColumn(name="id", referencedColumnName="propertyId")
     */
    protected $propertyHasAmenities;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasBadge", mappedBy="property")
     * @ORM\JoinColumn(name="id", referencedColumnName="propertyId")
     */
    protected $propertyHasBadges;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasOwnershipStatus", mappedBy="property")
     * @ORM\JoinColumn(name="id", referencedColumnName="propertyId")
     */
    protected $propertyHasOwnershipStatuses;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasPropertyStatus", mappedBy="property")
     * @ORM\JoinColumn(name="id", referencedColumnName="propertyId")
     */
    protected $propertyHasPropertyStatuses;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasPropertyType", mappedBy="property")
     * @ORM\JoinColumn(name="id", referencedColumnName="propertyId")
     */
    protected $propertyHasPropertyTypes;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasRoomType", mappedBy="property")
     * @ORM\JoinColumn(name="id", referencedColumnName="property_id")
     */
    protected $propertyHasRoomTypes;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasTag", mappedBy="property")
     * @ORM\JoinColumn(name="id", referencedColumnName="propertyId")
     */
    protected $propertyHasTags;

    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="properties")
     * @ORM\JoinColumn(name="clientId", referencedColumnName="id")
     */
    protected $client;

    /**
     * @ORM\ManyToOne(targetEntity="PropertyDetail", inversedBy="properties")
     * @ORM\JoinColumn(name="propertyDetail_id", referencedColumnName="id")
     */
    protected $propertyDetail;

    /**
     * @ORM\ManyToOne(targetEntity="OwnershipStatusRecord", inversedBy="properties")
     * @ORM\JoinColumn(name="ownershipStatusRecord_id", referencedColumnName="id")
     */
    protected $ownershipStatusRecord;

    /**
     * @ORM\ManyToOne(targetEntity="University", inversedBy="properties")
     * @ORM\JoinColumn(name="university_id", referencedColumnName="id")
     */
    protected $university;

    public function __construct()
    {
        $this->campusHasProperties = new ArrayCollection();
        $this->hostLanguages = new ArrayCollection();
        $this->propertyHasAmenities = new ArrayCollection();
        $this->propertyHasBadges = new ArrayCollection();
        $this->propertyHasOwnershipStatuses = new ArrayCollection();
        $this->propertyHasPropertyStatuses = new ArrayCollection();
        $this->propertyHasPropertyTypes = new ArrayCollection();
        $this->propertyHasRoomTypes = new ArrayCollection();
        $this->propertyHasTags = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\Property
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of clientId.
     *
     * @param integer $clientId
     * @return \Entity\Property
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get the value of clientId.
     *
     * @return integer
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set the value of propertyDetail_id.
     *
     * @param integer $propertyDetail_id
     * @return \Entity\Property
     */
    public function setPropertyDetailId($propertyDetail_id)
    {
        $this->propertyDetail_id = $propertyDetail_id;

        return $this;
    }

    /**
     * Get the value of propertyDetail_id.
     *
     * @return integer
     */
    public function getPropertyDetailId()
    {
        return $this->propertyDetail_id;
    }

    /**
     * Set the value of dAvailability.
     *
     * @param \DateTime $dAvailability
     * @return \Entity\Property
     */
    public function setDAvailability($dAvailability)
    {
        $this->dAvailability = $dAvailability;

        return $this;
    }

    /**
     * Get the value of dAvailability.
     *
     * @return \DateTime
     */
    public function getDAvailability()
    {
        return $this->dAvailability;
    }

    /**
     * Set the value of nOccupancyPeriodInMonths.
     *
     * @param integer $nOccupancyPeriodInMonths
     * @return \Entity\Property
     */
    public function setNOccupancyPeriodInMonths($nOccupancyPeriodInMonths)
    {
        $this->nOccupancyPeriodInMonths = $nOccupancyPeriodInMonths;

        return $this;
    }

    /**
     * Get the value of nOccupancyPeriodInMonths.
     *
     * @return integer
     */
    public function getNOccupancyPeriodInMonths()
    {
        return $this->nOccupancyPeriodInMonths;
    }

    /**
     * Set the value of nBedrooms.
     *
     * @param integer $nBedrooms
     * @return \Entity\Property
     */
    public function setNBedrooms($nBedrooms)
    {
        $this->nBedrooms = $nBedrooms;

        return $this;
    }

    /**
     * Get the value of nBedrooms.
     *
     * @return integer
     */
    public function getNBedrooms()
    {
        return $this->nBedrooms;
    }

    /**
     * Set the value of nBathrooms.
     *
     * @param integer $nBathrooms
     * @return \Entity\Property
     */
    public function setNBathrooms($nBathrooms)
    {
        $this->nBathrooms = $nBathrooms;

        return $this;
    }

    /**
     * Get the value of nBathrooms.
     *
     * @return integer
     */
    public function getNBathrooms()
    {
        return $this->nBathrooms;
    }

    /**
     * Set the value of nBeds.
     *
     * @param integer $nBeds
     * @return \Entity\Property
     */
    public function setNBeds($nBeds)
    {
        $this->nBeds = $nBeds;

        return $this;
    }

    /**
     * Get the value of nBeds.
     *
     * @return integer
     */
    public function getNBeds()
    {
        return $this->nBeds;
    }

    /**
     * Set the value of nMaximumOccupants.
     *
     * @param integer $nMaximumOccupants
     * @return \Entity\Property
     */
    public function setNMaximumOccupants($nMaximumOccupants)
    {
        $this->nMaximumOccupants = $nMaximumOccupants;

        return $this;
    }

    /**
     * Get the value of nMaximumOccupants.
     *
     * @return integer
     */
    public function getNMaximumOccupants()
    {
        return $this->nMaximumOccupants;
    }

    /**
     * Set the value of nRentAmount.
     *
     * @param float $nRentAmount
     * @return \Entity\Property
     */
    public function setNRentAmount($nRentAmount)
    {
        $this->nRentAmount = $nRentAmount;

        return $this;
    }

    /**
     * Get the value of nRentAmount.
     *
     * @return float
     */
    public function getNRentAmount()
    {
        return $this->nRentAmount;
    }

    /**
     * Set the value of nViews.
     *
     * @param integer $nViews
     * @return \Entity\Property
     */
    public function setNViews($nViews)
    {
        $this->nViews = $nViews;

        return $this;
    }

    /**
     * Get the value of nViews.
     *
     * @return integer
     */
    public function getNViews()
    {
        return $this->nViews;
    }

    /**
     * Set the value of nLatitude.
     *
     * @param float $nLatitude
     * @return \Entity\Property
     */
    public function setNLatitude($nLatitude)
    {
        $this->nLatitude = $nLatitude;

        return $this;
    }

    /**
     * Get the value of nLatitude.
     *
     * @return float
     */
    public function getNLatitude()
    {
        return $this->nLatitude;
    }

    /**
     * Set the value of bDisplayContactDetails.
     *
     * @param boolean $bDisplayContactDetails
     * @return \Entity\Property
     */
    public function setBDisplayContactDetails($bDisplayContactDetails)
    {
        $this->bDisplayContactDetails = $bDisplayContactDetails;

        return $this;
    }

    /**
     * Get the value of bDisplayContactDetails.
     *
     * @return boolean
     */
    public function getBDisplayContactDetails()
    {
        return $this->bDisplayContactDetails;
    }

    /**
     * Set the value of bNotify.
     *
     * @param boolean $bNotify
     * @return \Entity\Property
     */
    public function setBNotify($bNotify)
    {
        $this->bNotify = $bNotify;

        return $this;
    }

    /**
     * Get the value of bNotify.
     *
     * @return boolean
     */
    public function getBNotify()
    {
        return $this->bNotify;
    }

    /**
     * Set the value of nLongitude.
     *
     * @param float $nLongitude
     * @return \Entity\Property
     */
    public function setNLongitude($nLongitude)
    {
        $this->nLongitude = $nLongitude;

        return $this;
    }

    /**
     * Get the value of nLongitude.
     *
     * @return float
     */
    public function getNLongitude()
    {
        return $this->nLongitude;
    }

    /**
     * Set the value of tAddressTitle.
     *
     * @param string $tAddressTitle
     * @return \Entity\Property
     */
    public function setTAddressTitle($tAddressTitle)
    {
        $this->tAddressTitle = $tAddressTitle;

        return $this;
    }

    /**
     * Get the value of tAddressTitle.
     *
     * @return string
     */
    public function getTAddressTitle()
    {
        return $this->tAddressTitle;
    }

    /**
     * Set the value of tStreet1.
     *
     * @param string $tStreet1
     * @return \Entity\Property
     */
    public function setTStreet1($tStreet1)
    {
        $this->tStreet1 = $tStreet1;

        return $this;
    }

    /**
     * Get the value of tStreet1.
     *
     * @return string
     */
    public function getTStreet1()
    {
        return $this->tStreet1;
    }

    /**
     * Set the value of tStreet2.
     *
     * @param string $tStreet2
     * @return \Entity\Property
     */
    public function setTStreet2($tStreet2)
    {
        $this->tStreet2 = $tStreet2;

        return $this;
    }

    /**
     * Get the value of tStreet2.
     *
     * @return string
     */
    public function getTStreet2()
    {
        return $this->tStreet2;
    }

    /**
     * Set the value of tCity.
     *
     * @param string $tCity
     * @return \Entity\Property
     */
    public function setTCity($tCity)
    {
        $this->tCity = $tCity;

        return $this;
    }

    /**
     * Get the value of tCity.
     *
     * @return string
     */
    public function getTCity()
    {
        return $this->tCity;
    }

    /**
     * Set the value of tState.
     *
     * @param string $tState
     * @return \Entity\Property
     */
    public function setTState($tState)
    {
        $this->tState = $tState;

        return $this;
    }

    /**
     * Get the value of tState.
     *
     * @return string
     */
    public function getTState()
    {
        return $this->tState;
    }

    /**
     * Set the value of nCountry.
     *
     * @param integer $nCountry
     * @return \Entity\Property
     */
    public function setNCountry($nCountry)
    {
        $this->nCountry = $nCountry;

        return $this;
    }

    /**
     * Get the value of nCountry.
     *
     * @return integer
     */
    public function getNCountry()
    {
        return $this->nCountry;
    }

    /**
     * Set the value of tZipCode.
     *
     * @param string $tZipCode
     * @return \Entity\Property
     */
    public function setTZipCode($tZipCode)
    {
        $this->tZipCode = $tZipCode;

        return $this;
    }

    /**
     * Get the value of tZipCode.
     *
     * @return string
     */
    public function getTZipCode()
    {
        return $this->tZipCode;
    }

    /**
     * Set the value of tPropertyTitle.
     *
     * @param string $tPropertyTitle
     * @return \Entity\Property
     */
    public function setTPropertyTitle($tPropertyTitle)
    {
        $this->tPropertyTitle = $tPropertyTitle;

        return $this;
    }

    /**
     * Get the value of tPropertyTitle.
     *
     * @return string
     */
    public function getTPropertyTitle()
    {
        return $this->tPropertyTitle;
    }

    /**
     * Set the value of tPropertyDescription.
     *
     * @param string $tPropertyDescription
     * @return \Entity\Property
     */
    public function setTPropertyDescription($tPropertyDescription)
    {
        $this->tPropertyDescription = $tPropertyDescription;

        return $this;
    }

    /**
     * Get the value of tPropertyDescription.
     *
     * @return string
     */
    public function getTPropertyDescription()
    {
        return $this->tPropertyDescription;
    }

    /**
     * Set the value of dDisplayedOn.
     *
     * @param \DateTime $dDisplayedOn
     * @return \Entity\Property
     */
    public function setDDisplayedOn($dDisplayedOn)
    {
        $this->dDisplayedOn = $dDisplayedOn;

        return $this;
    }

    /**
     * Get the value of dDisplayedOn.
     *
     * @return \DateTime
     */
    public function getDDisplayedOn()
    {
        return $this->dDisplayedOn;
    }

    /**
     * Set the value of dClosureDate.
     *
     * @param \DateTime $dClosureDate
     * @return \Entity\Property
     */
    public function setDClosureDate($dClosureDate)
    {
        $this->dClosureDate = $dClosureDate;

        return $this;
    }

    /**
     * Get the value of dClosureDate.
     *
     * @return \DateTime
     */
    public function getDClosureDate()
    {
        return $this->dClosureDate;
    }

    /**
     * Set the value of bIsApproved.
     *
     * @param boolean $bIsApproved
     * @return \Entity\Property
     */
    public function setBIsApproved($bIsApproved)
    {
        $this->bIsApproved = $bIsApproved;

        return $this;
    }

    /**
     * Get the value of bIsApproved.
     *
     * @return boolean
     */
    public function getBIsApproved()
    {
        return $this->bIsApproved;
    }

    /**
     * Set the value of tNonapprovalReason.
     *
     * @param string $tNonapprovalReason
     * @return \Entity\Property
     */
    public function setTNonapprovalReason($tNonapprovalReason)
    {
        $this->tNonapprovalReason = $tNonapprovalReason;

        return $this;
    }

    /**
     * Get the value of tNonapprovalReason.
     *
     * @return string
     */
    public function getTNonapprovalReason()
    {
        return $this->tNonapprovalReason;
    }

    /**
     * Set the value of bIsBlacklisted.
     *
     * @param boolean $bIsBlacklisted
     * @return \Entity\Property
     */
    public function setBIsBlacklisted($bIsBlacklisted)
    {
        $this->bIsBlacklisted = $bIsBlacklisted;

        return $this;
    }

    /**
     * Get the value of bIsBlacklisted.
     *
     * @return boolean
     */
    public function getBIsBlacklisted()
    {
        return $this->bIsBlacklisted;
    }

    /**
     * Set the value of tBlacklistedReason.
     *
     * @param string $tBlacklistedReason
     * @return \Entity\Property
     */
    public function setTBlacklistedReason($tBlacklistedReason)
    {
        $this->tBlacklistedReason = $tBlacklistedReason;

        return $this;
    }

    /**
     * Get the value of tBlacklistedReason.
     *
     * @return string
     */
    public function getTBlacklistedReason()
    {
        return $this->tBlacklistedReason;
    }

    /**
     * Set the value of dApprovalRequestDate.
     *
     * @param \DateTime $dApprovalRequestDate
     * @return \Entity\Property
     */
    public function setDApprovalRequestDate($dApprovalRequestDate)
    {
        $this->dApprovalRequestDate = $dApprovalRequestDate;

        return $this;
    }

    /**
     * Get the value of dApprovalRequestDate.
     *
     * @return \DateTime
     */
    public function getDApprovalRequestDate()
    {
        return $this->dApprovalRequestDate;
    }

    /**
     * Set the value of dApprovalDate.
     *
     * @param \DateTime $dApprovalDate
     * @return \Entity\Property
     */
    public function setDApprovalDate($dApprovalDate)
    {
        $this->dApprovalDate = $dApprovalDate;

        return $this;
    }

    /**
     * Get the value of dApprovalDate.
     *
     * @return \DateTime
     */
    public function getDApprovalDate()
    {
        return $this->dApprovalDate;
    }

    /**
     * Set the value of bIsDisplayed.
     *
     * @param boolean $bIsDisplayed
     * @return \Entity\Property
     */
    public function setBIsDisplayed($bIsDisplayed)
    {
        $this->bIsDisplayed = $bIsDisplayed;

        return $this;
    }

    /**
     * Get the value of bIsDisplayed.
     *
     * @return boolean
     */
    public function getBIsDisplayed()
    {
        return $this->bIsDisplayed;
    }

    /**
     * Set the value of nApprovedBy.
     *
     * @param integer $nApprovedBy
     * @return \Entity\Property
     */
    public function setNApprovedBy($nApprovedBy)
    {
        $this->nApprovedBy = $nApprovedBy;

        return $this;
    }

    /**
     * Get the value of nApprovedBy.
     *
     * @return integer
     */
    public function getNApprovedBy()
    {
        return $this->nApprovedBy;
    }

    /**
     * Set the value of dCreatedAt.
     *
     * @param \DateTime $dCreatedAt
     * @return \Entity\Property
     */
    public function setDCreatedAt($dCreatedAt)
    {
        $this->dCreatedAt = $dCreatedAt;

        return $this;
    }

    /**
     * Get the value of dCreatedAt.
     *
     * @return \DateTime
     */
    public function getDCreatedAt()
    {
        return $this->dCreatedAt;
    }

    /**
     * Set the value of dUpdatedAt.
     *
     * @param \DateTime $dUpdatedAt
     * @return \Entity\Property
     */
    public function setDUpdatedAt($dUpdatedAt)
    {
        $this->dUpdatedAt = $dUpdatedAt;

        return $this;
    }

    /**
     * Get the value of dUpdatedAt.
     *
     * @return \DateTime
     */
    public function getDUpdatedAt()
    {
        return $this->dUpdatedAt;
    }

    /**
     * Set the value of ownershipStatusRecord_id.
     *
     * @param integer $ownershipStatusRecord_id
     * @return \Entity\Property
     */
    public function setOwnershipStatusRecordId($ownershipStatusRecord_id)
    {
        $this->ownershipStatusRecord_id = $ownershipStatusRecord_id;

        return $this;
    }

    /**
     * Get the value of ownershipStatusRecord_id.
     *
     * @return integer
     */
    public function getOwnershipStatusRecordId()
    {
        return $this->ownershipStatusRecord_id;
    }

    /**
     * Set the value of university_id.
     *
     * @param integer $university_id
     * @return \Entity\Property
     */
    public function setUniversityId($university_id)
    {
        $this->university_id = $university_id;

        return $this;
    }

    /**
     * Get the value of university_id.
     *
     * @return integer
     */
    public function getUniversityId()
    {
        return $this->university_id;
    }

    /**
     * Add CampusHasProperty entity to collection (one to many).
     *
     * @param \Entity\CampusHasProperty $campusHasProperty
     * @return \Entity\Property
     */
    public function addCampusHasProperty(CampusHasProperty $campusHasProperty)
    {
        $this->campusHasProperties[] = $campusHasProperty;

        return $this;
    }

    /**
     * Remove CampusHasProperty entity from collection (one to many).
     *
     * @param \Entity\CampusHasProperty $campusHasProperty
     * @return \Entity\Property
     */
    public function removeCampusHasProperty(CampusHasProperty $campusHasProperty)
    {
        $this->campusHasProperties->removeElement($campusHasProperty);

        return $this;
    }

    /**
     * Get CampusHasProperty entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCampusHasProperties()
    {
        return $this->campusHasProperties;
    }

    /**
     * Add HostLanguage entity to collection (one to many).
     *
     * @param \Entity\HostLanguage $hostLanguage
     * @return \Entity\Property
     */
    public function addHostLanguage(HostLanguage $hostLanguage)
    {
        $this->hostLanguages[] = $hostLanguage;

        return $this;
    }

    /**
     * Remove HostLanguage entity from collection (one to many).
     *
     * @param \Entity\HostLanguage $hostLanguage
     * @return \Entity\Property
     */
    public function removeHostLanguage(HostLanguage $hostLanguage)
    {
        $this->hostLanguages->removeElement($hostLanguage);

        return $this;
    }

    /**
     * Get HostLanguage entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHostLanguages()
    {
        return $this->hostLanguages;
    }

    /**
     * Add PropertyHasAmenity entity to collection (one to many).
     *
     * @param \Entity\PropertyHasAmenity $propertyHasAmenity
     * @return \Entity\Property
     */
    public function addPropertyHasAmenity(PropertyHasAmenity $propertyHasAmenity)
    {
        $this->propertyHasAmenities[] = $propertyHasAmenity;

        return $this;
    }

    /**
     * Remove PropertyHasAmenity entity from collection (one to many).
     *
     * @param \Entity\PropertyHasAmenity $propertyHasAmenity
     * @return \Entity\Property
     */
    public function removePropertyHasAmenity(PropertyHasAmenity $propertyHasAmenity)
    {
        $this->propertyHasAmenities->removeElement($propertyHasAmenity);

        return $this;
    }

    /**
     * Get PropertyHasAmenity entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropertyHasAmenities()
    {
        return $this->propertyHasAmenities;
    }

    /**
     * Add PropertyHasBadge entity to collection (one to many).
     *
     * @param \Entity\PropertyHasBadge $propertyHasBadge
     * @return \Entity\Property
     */
    public function addPropertyHasBadge(PropertyHasBadge $propertyHasBadge)
    {
        $this->propertyHasBadges[] = $propertyHasBadge;

        return $this;
    }

    /**
     * Remove PropertyHasBadge entity from collection (one to many).
     *
     * @param \Entity\PropertyHasBadge $propertyHasBadge
     * @return \Entity\Property
     */
    public function removePropertyHasBadge(PropertyHasBadge $propertyHasBadge)
    {
        $this->propertyHasBadges->removeElement($propertyHasBadge);

        return $this;
    }

    /**
     * Get PropertyHasBadge entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropertyHasBadges()
    {
        return $this->propertyHasBadges;
    }

    /**
     * Add PropertyHasOwnershipStatus entity to collection (one to many).
     *
     * @param \Entity\PropertyHasOwnershipStatus $propertyHasOwnershipStatus
     * @return \Entity\Property
     */
    public function addPropertyHasOwnershipStatus(PropertyHasOwnershipStatus $propertyHasOwnershipStatus)
    {
        $this->propertyHasOwnershipStatuses[] = $propertyHasOwnershipStatus;

        return $this;
    }

    /**
     * Remove PropertyHasOwnershipStatus entity from collection (one to many).
     *
     * @param \Entity\PropertyHasOwnershipStatus $propertyHasOwnershipStatus
     * @return \Entity\Property
     */
    public function removePropertyHasOwnershipStatus(PropertyHasOwnershipStatus $propertyHasOwnershipStatus)
    {
        $this->propertyHasOwnershipStatuses->removeElement($propertyHasOwnershipStatus);

        return $this;
    }

    /**
     * Get PropertyHasOwnershipStatus entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropertyHasOwnershipStatuses()
    {
        return $this->propertyHasOwnershipStatuses;
    }

    /**
     * Add PropertyHasPropertyStatus entity to collection (one to many).
     *
     * @param \Entity\PropertyHasPropertyStatus $propertyHasPropertyStatus
     * @return \Entity\Property
     */
    public function addPropertyHasPropertyStatus(PropertyHasPropertyStatus $propertyHasPropertyStatus)
    {
        $this->propertyHasPropertyStatuses[] = $propertyHasPropertyStatus;

        return $this;
    }

    /**
     * Remove PropertyHasPropertyStatus entity from collection (one to many).
     *
     * @param \Entity\PropertyHasPropertyStatus $propertyHasPropertyStatus
     * @return \Entity\Property
     */
    public function removePropertyHasPropertyStatus(PropertyHasPropertyStatus $propertyHasPropertyStatus)
    {
        $this->propertyHasPropertyStatuses->removeElement($propertyHasPropertyStatus);

        return $this;
    }

    /**
     * Get PropertyHasPropertyStatus entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropertyHasPropertyStatuses()
    {
        return $this->propertyHasPropertyStatuses;
    }

    /**
     * Add PropertyHasPropertyType entity to collection (one to many).
     *
     * @param \Entity\PropertyHasPropertyType $propertyHasPropertyType
     * @return \Entity\Property
     */
    public function addPropertyHasPropertyType(PropertyHasPropertyType $propertyHasPropertyType)
    {
        $this->propertyHasPropertyTypes[] = $propertyHasPropertyType;

        return $this;
    }

    /**
     * Remove PropertyHasPropertyType entity from collection (one to many).
     *
     * @param \Entity\PropertyHasPropertyType $propertyHasPropertyType
     * @return \Entity\Property
     */
    public function removePropertyHasPropertyType(PropertyHasPropertyType $propertyHasPropertyType)
    {
        $this->propertyHasPropertyTypes->removeElement($propertyHasPropertyType);

        return $this;
    }

    /**
     * Get PropertyHasPropertyType entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropertyHasPropertyTypes()
    {
        return $this->propertyHasPropertyTypes;
    }

    /**
     * Add PropertyHasRoomType entity to collection (one to many).
     *
     * @param \Entity\PropertyHasRoomType $propertyHasRoomType
     * @return \Entity\Property
     */
    public function addPropertyHasRoomType(PropertyHasRoomType $propertyHasRoomType)
    {
        $this->propertyHasRoomTypes[] = $propertyHasRoomType;

        return $this;
    }

    /**
     * Remove PropertyHasRoomType entity from collection (one to many).
     *
     * @param \Entity\PropertyHasRoomType $propertyHasRoomType
     * @return \Entity\Property
     */
    public function removePropertyHasRoomType(PropertyHasRoomType $propertyHasRoomType)
    {
        $this->propertyHasRoomTypes->removeElement($propertyHasRoomType);

        return $this;
    }

    /**
     * Get PropertyHasRoomType entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropertyHasRoomTypes()
    {
        return $this->propertyHasRoomTypes;
    }

    /**
     * Add PropertyHasTag entity to collection (one to many).
     *
     * @param \Entity\PropertyHasTag $propertyHasTag
     * @return \Entity\Property
     */
    public function addPropertyHasTag(PropertyHasTag $propertyHasTag)
    {
        $this->propertyHasTags[] = $propertyHasTag;

        return $this;
    }

    /**
     * Remove PropertyHasTag entity from collection (one to many).
     *
     * @param \Entity\PropertyHasTag $propertyHasTag
     * @return \Entity\Property
     */
    public function removePropertyHasTag(PropertyHasTag $propertyHasTag)
    {
        $this->propertyHasTags->removeElement($propertyHasTag);

        return $this;
    }

    /**
     * Get PropertyHasTag entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropertyHasTags()
    {
        return $this->propertyHasTags;
    }

    /**
     * Set Client entity (many to one).
     *
     * @param \Entity\Client $client
     * @return \Entity\Property
     */
    public function setClient(Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get Client entity (many to one).
     *
     * @return \Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set PropertyDetail entity (many to one).
     *
     * @param \Entity\PropertyDetail $propertyDetail
     * @return \Entity\Property
     */
    public function setPropertyDetail(PropertyDetail $propertyDetail = null)
    {
        $this->propertyDetail = $propertyDetail;

        return $this;
    }

    /**
     * Get PropertyDetail entity (many to one).
     *
     * @return \Entity\PropertyDetail
     */
    public function getPropertyDetail()
    {
        return $this->propertyDetail;
    }

    /**
     * Set OwnershipStatusRecord entity (many to one).
     *
     * @param \Entity\OwnershipStatusRecord $ownershipStatusRecord
     * @return \Entity\Property
     */
    public function setOwnershipStatusRecord(OwnershipStatusRecord $ownershipStatusRecord = null)
    {
        $this->ownershipStatusRecord = $ownershipStatusRecord;

        return $this;
    }

    /**
     * Get OwnershipStatusRecord entity (many to one).
     *
     * @return \Entity\OwnershipStatusRecord
     */
    public function getOwnershipStatusRecord()
    {
        return $this->ownershipStatusRecord;
    }

    /**
     * Set University entity (many to one).
     *
     * @param \Entity\University $university
     * @return \Entity\Property
     */
    public function setUniversity(University $university = null)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get University entity (many to one).
     *
     * @return \Entity\University
     */
    public function getUniversity()
    {
        return $this->university;
    }

    public function __sleep()
    {
        return array('id', 'clientId', 'propertyDetail_id', 'dAvailability', 'nOccupancyPeriodInMonths', 'nBedrooms', 'nBathrooms', 'nBeds', 'nMaximumOccupants', 'nRentAmount', 'nViews', 'nLatitude', 'bDisplayContactDetails', 'bNotify', 'nLongitude', 'tAddressTitle', 'tStreet1', 'tStreet2', 'tCity', 'tState', 'nCountry', 'tZipCode', 'tPropertyTitle', 'tPropertyDescription', 'dDisplayedOn', 'dClosureDate', 'bIsApproved', 'tNonapprovalReason', 'bIsBlacklisted', 'tBlacklistedReason', 'dApprovalRequestDate', 'dApprovalDate', 'bIsDisplayed', 'nApprovedBy', 'dCreatedAt', 'dUpdatedAt', 'ownershipStatusRecord_id', 'university_id');
    }
}