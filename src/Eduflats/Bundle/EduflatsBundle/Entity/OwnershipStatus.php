<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-08-05 09:11:21.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Eduflats\Bundle\EduflatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\OwnershipStatus
 *
 * @ORM\Entity()
 * @ORM\Table(name="ownershipStatus")
 */
class OwnershipStatus
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nOwnershipStatus;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasOwnershipStatus", mappedBy="ownershipStatus")
     * @ORM\JoinColumn(name="id", referencedColumnName="ownershipStatusId")
     */
    protected $propertyHasOwnershipStatuses;

    public function __construct()
    {
        $this->propertyHasOwnershipStatuses = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\OwnershipStatus
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
     * Set the value of nOwnershipStatus.
     *
     * @param integer $nOwnershipStatus
     * @return \Entity\OwnershipStatus
     */
    public function setNOwnershipStatus($nOwnershipStatus)
    {
        $this->nOwnershipStatus = $nOwnershipStatus;

        return $this;
    }

    /**
     * Get the value of nOwnershipStatus.
     *
     * @return integer
     */
    public function getNOwnershipStatus()
    {
        return $this->nOwnershipStatus;
    }

    /**
     * Add PropertyHasOwnershipStatus entity to collection (one to many).
     *
     * @param \Entity\PropertyHasOwnershipStatus $propertyHasOwnershipStatus
     * @return \Entity\OwnershipStatus
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
     * @return \Entity\OwnershipStatus
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

    public function __sleep()
    {
        return array('id', 'nOwnershipStatus');
    }
}
