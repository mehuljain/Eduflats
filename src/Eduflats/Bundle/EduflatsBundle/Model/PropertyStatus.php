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
 * Entity\PropertyStatus
 *
 * @ORM\Entity(repositoryClass="PropertyStatusRepository")
 * @ORM\Table(name="propertyStatus")
 */
class PropertyStatus
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nPropertyStatus;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasPropertyStatus", mappedBy="propertyStatus")
     * @ORM\JoinColumn(name="id", referencedColumnName="propertyStatusId")
     */
    protected $propertyHasPropertyStatuses;

    public function __construct()
    {
        $this->propertyHasPropertyStatuses = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\PropertyStatus
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
     * Set the value of nPropertyStatus.
     *
     * @param integer $nPropertyStatus
     * @return \Entity\PropertyStatus
     */
    public function setNPropertyStatus($nPropertyStatus)
    {
        $this->nPropertyStatus = $nPropertyStatus;

        return $this;
    }

    /**
     * Get the value of nPropertyStatus.
     *
     * @return integer
     */
    public function getNPropertyStatus()
    {
        return $this->nPropertyStatus;
    }

    /**
     * Add PropertyHasPropertyStatus entity to collection (one to many).
     *
     * @param \Entity\PropertyHasPropertyStatus $propertyHasPropertyStatus
     * @return \Entity\PropertyStatus
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
     * @return \Entity\PropertyStatus
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

    public function __sleep()
    {
        return array('id', 'nPropertyStatus');
    }
}