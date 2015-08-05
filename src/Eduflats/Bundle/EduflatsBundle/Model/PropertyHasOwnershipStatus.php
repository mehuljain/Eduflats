<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-08-05 09:11:21.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\PropertyHasOwnershipStatus
 *
 * @ORM\Entity(repositoryClass="PropertyHasOwnershipStatusRepository")
 * @ORM\Table(name="propertyHasOwnershipStatus", indexes={@ORM\Index(name="fk_property_has_ownership_status_ownership_status1_idx", columns={"ownershipStatusId"}), @ORM\Index(name="fk_property_has_ownership_status_property1_idx", columns={"propertyId"})})
 */
class PropertyHasOwnershipStatus
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $propertyId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $ownershipStatusId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Property", inversedBy="propertyHasOwnershipStatuses")
     * @ORM\JoinColumn(name="propertyId", referencedColumnName="id")
     */
    protected $property;

    /**
     * @ORM\ManyToOne(targetEntity="OwnershipStatus", inversedBy="propertyHasOwnershipStatuses")
     * @ORM\JoinColumn(name="ownershipStatusId", referencedColumnName="id")
     */
    protected $ownershipStatus;

    public function __construct()
    {
    }

    /**
     * Set the value of propertyId.
     *
     * @param integer $propertyId
     * @return \Entity\PropertyHasOwnershipStatus
     */
    public function setPropertyId($propertyId)
    {
        $this->propertyId = $propertyId;

        return $this;
    }

    /**
     * Get the value of propertyId.
     *
     * @return integer
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * Set the value of ownershipStatusId.
     *
     * @param integer $ownershipStatusId
     * @return \Entity\PropertyHasOwnershipStatus
     */
    public function setOwnershipStatusId($ownershipStatusId)
    {
        $this->ownershipStatusId = $ownershipStatusId;

        return $this;
    }

    /**
     * Get the value of ownershipStatusId.
     *
     * @return integer
     */
    public function getOwnershipStatusId()
    {
        return $this->ownershipStatusId;
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\PropertyHasOwnershipStatus
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
     * Set Property entity (many to one).
     *
     * @param \Entity\Property $property
     * @return \Entity\PropertyHasOwnershipStatus
     */
    public function setProperty(Property $property = null)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Get Property entity (many to one).
     *
     * @return \Entity\Property
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Set OwnershipStatus entity (many to one).
     *
     * @param \Entity\OwnershipStatus $ownershipStatus
     * @return \Entity\PropertyHasOwnershipStatus
     */
    public function setOwnershipStatus(OwnershipStatus $ownershipStatus = null)
    {
        $this->ownershipStatus = $ownershipStatus;

        return $this;
    }

    /**
     * Get OwnershipStatus entity (many to one).
     *
     * @return \Entity\OwnershipStatus
     */
    public function getOwnershipStatus()
    {
        return $this->ownershipStatus;
    }

    public function __sleep()
    {
        return array('propertyId', 'ownershipStatusId', 'id');
    }
}