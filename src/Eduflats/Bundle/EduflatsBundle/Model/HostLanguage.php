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
 * Entity\HostLanguage
 *
 * @ORM\Entity(repositoryClass="HostLanguageRepository")
 * @ORM\Table(name="hostLanguage", indexes={@ORM\Index(name="fk_property_has_host_language_property1_idx", columns={"propertyId"})})
 */
class HostLanguage
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
    protected $hostLanguageId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Property", inversedBy="hostLanguages")
     * @ORM\JoinColumn(name="propertyId", referencedColumnName="id")
     */
    protected $property;

    public function __construct()
    {
    }

    /**
     * Set the value of propertyId.
     *
     * @param integer $propertyId
     * @return \Entity\HostLanguage
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
     * Set the value of hostLanguageId.
     *
     * @param integer $hostLanguageId
     * @return \Entity\HostLanguage
     */
    public function setHostLanguageId($hostLanguageId)
    {
        $this->hostLanguageId = $hostLanguageId;

        return $this;
    }

    /**
     * Get the value of hostLanguageId.
     *
     * @return integer
     */
    public function getHostLanguageId()
    {
        return $this->hostLanguageId;
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\HostLanguage
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
     * @return \Entity\HostLanguage
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

    public function __sleep()
    {
        return array('propertyId', 'hostLanguageId', 'id');
    }
}