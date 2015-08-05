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
 * Entity\Tag
 *
 * @ORM\Entity(repositoryClass="TagRepository")
 * @ORM\Table(name="tag")
 */
class Tag
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tTagName;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasTag", mappedBy="tag")
     * @ORM\JoinColumn(name="id", referencedColumnName="tagId")
     */
    protected $propertyHasTags;

    public function __construct()
    {
        $this->propertyHasTags = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\Tag
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
     * Set the value of tTagName.
     *
     * @param string $tTagName
     * @return \Entity\Tag
     */
    public function setTTagName($tTagName)
    {
        $this->tTagName = $tTagName;

        return $this;
    }

    /**
     * Get the value of tTagName.
     *
     * @return string
     */
    public function getTTagName()
    {
        return $this->tTagName;
    }

    /**
     * Add PropertyHasTag entity to collection (one to many).
     *
     * @param \Entity\PropertyHasTag $propertyHasTag
     * @return \Entity\Tag
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
     * @return \Entity\Tag
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

    public function __sleep()
    {
        return array('id', 'tTagName');
    }
}