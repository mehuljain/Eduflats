<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-08-05 09:11:21.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Eduflats\Bundle\EduflatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\PropertyHasTag
 *
 * @ORM\Entity(repositoryClass="PropertyHasTagRepository")
 * @ORM\Table(name="propertyHasTags", indexes={@ORM\Index(name="fk_property_has_tag_tag1_idx", columns={"tagId"}), @ORM\Index(name="fk_property_has_tag_property1_idx", columns={"propertyId"})})
 */
class PropertyHasTag
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
    protected $tagId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Property", inversedBy="propertyHasTags")
     * @ORM\JoinColumn(name="propertyId", referencedColumnName="id")
     */
    protected $property;

    /**
     * @ORM\ManyToOne(targetEntity="Tag", inversedBy="propertyHasTags")
     * @ORM\JoinColumn(name="tagId", referencedColumnName="id")
     */
    protected $tag;

    public function __construct()
    {
    }

    /**
     * Set the value of propertyId.
     *
     * @param integer $propertyId
     * @return \Entity\PropertyHasTag
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
     * Set the value of tagId.
     *
     * @param integer $tagId
     * @return \Entity\PropertyHasTag
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;

        return $this;
    }

    /**
     * Get the value of tagId.
     *
     * @return integer
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\PropertyHasTag
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
     * @return \Entity\PropertyHasTag
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
     * Set Tag entity (many to one).
     *
     * @param \Entity\Tag $tag
     * @return \Entity\PropertyHasTag
     */
    public function setTag(Tag $tag = null)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get Tag entity (many to one).
     *
     * @return \Entity\Tag
     */
    public function getTag()
    {
        return $this->tag;
    }

    public function __sleep()
    {
        return array('propertyId', 'tagId', 'id');
    }
}
