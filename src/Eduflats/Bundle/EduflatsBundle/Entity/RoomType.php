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
 * Entity\RoomType
 *
 * @ORM\Entity()
 * @ORM\Table(name="roomType", indexes={@ORM\Index(name="fk_roomType_university1_idx", columns={"university_id"})})
 */
class RoomType
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nRoomType;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $university_id;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasRoomType", mappedBy="roomType")
     * @ORM\JoinColumn(name="id", referencedColumnName="room_type_id")
     */
    protected $propertyHasRoomTypes;

    /**
     * @ORM\ManyToOne(targetEntity="University", inversedBy="roomTypes")
     * @ORM\JoinColumn(name="university_id", referencedColumnName="id")
     */
    protected $university;

    public function __construct()
    {
        $this->propertyHasRoomTypes = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\RoomType
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
     * Set the value of nRoomType.
     *
     * @param integer $nRoomType
     * @return \Entity\RoomType
     */
    public function setNRoomType($nRoomType)
    {
        $this->nRoomType = $nRoomType;

        return $this;
    }

    /**
     * Get the value of nRoomType.
     *
     * @return integer
     */
    public function getNRoomType()
    {
        return $this->nRoomType;
    }

    /**
     * Set the value of university_id.
     *
     * @param integer $university_id
     * @return \Entity\RoomType
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
     * Add PropertyHasRoomType entity to collection (one to many).
     *
     * @param \Entity\PropertyHasRoomType $propertyHasRoomType
     * @return \Entity\RoomType
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
     * @return \Entity\RoomType
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
     * Set University entity (many to one).
     *
     * @param \Entity\University $university
     * @return \Entity\RoomType
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
        return array('id', 'nRoomType', 'university_id');
    }
}
