<?php
namespace Eduflats\Bundle\EduflatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\HexValue
 *
 * @ORM\Entity()
 * @ORM\Table(name="hexValue")
 */
class HexValue
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="WebsiteSetting", inversedBy="hexValue")
     * @ORM\JoinColumn(name="hexvalue_id", referencedColumnName="id")
     */
    protected $websiteSetting;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nHeaderColor;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nFooterColor;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nBackgroundColor;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nFontColor;

    /**
     * @ORM\OneToMany(targetEntity="WebsiteSetting", mappedBy="hexValue")
     * @ORM\JoinColumn(name="id", referencedColumnName="hexValueId")
     */
    protected $websiteSettings;

    public function __construct()
    {
        $this->websiteSettings = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\HexValue
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
     * Set the value of nHeaderColor.
     *
     * @param integer $nHeaderColor
     * @return \Entity\HexValue
     */
    public function setNHeaderColor($nHeaderColor)
    {
        $this->nHeaderColor = $nHeaderColor;

        return $this;
    }

    /**
     * Get the value of nHeaderColor.
     *
     * @return integer
     */
    public function getNHeaderColor()
    {
        return $this->nHeaderColor;
    }

    /**
     * Set the value of nFooterColor.
     *
     * @param integer $nFooterColor
     * @return \Entity\HexValue
     */
    public function setNFooterColor($nFooterColor)
    {
        $this->nFooterColor = $nFooterColor;

        return $this;
    }

    /**
     * Get the value of nFooterColor.
     *
     * @return integer
     */
    public function getNFooterColor()
    {
        return $this->nFooterColor;
    }

    /**
     * Set the value of nBackgroundColor.
     *
     * @param integer $nBackgroundColor
     * @return \Entity\HexValue
     */
    public function setNBackgroundColor($nBackgroundColor)
    {
        $this->nBackgroundColor = $nBackgroundColor;

        return $this;
    }

    /**
     * Get the value of nBackgroundColor.
     *
     * @return integer
     */
    public function getNBackgroundColor()
    {
        return $this->nBackgroundColor;
    }

    /**
     * Set the value of nFontColor.
     *
     * @param integer $nFontColor
     * @return \Entity\HexValue
     */
    public function setNFontColor($nFontColor)
    {
        $this->nFontColor = $nFontColor;

        return $this;
    }

    /**
     * Get the value of nFontColor.
     *
     * @return integer
     */
    public function getNFontColor()
    {
        return $this->nFontColor;
    }

    /**
     * Add WebsiteSetting entity to collection (one to many).
     *
     * @param \Entity\WebsiteSetting $websiteSetting
     * @return \Entity\HexValue
     */
    public function addWebsiteSetting(WebsiteSetting $websiteSetting)
    {
        $this->websiteSettings[] = $websiteSetting;

        return $this;
    }

    /**
     * Remove WebsiteSetting entity from collection (one to many).
     *
     * @param \Entity\WebsiteSetting $websiteSetting
     * @return \Entity\HexValue
     */
    public function removeWebsiteSetting(WebsiteSetting $websiteSetting)
    {
        $this->websiteSettings->removeElement($websiteSetting);

        return $this;
    }

    /**
     * Get WebsiteSetting entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWebsiteSettings()
    {
        return $this->websiteSettings;
    }

    public function __sleep()
    {
        return array('id', 'nHeaderColor', 'nFooterColor', 'nBackgroundColor', 'nFontColor');
    }

    /**
     * Set websiteSetting
     *
     * @param \Eduflats\Bundle\EduflatsBundle\Entity\WebsiteSetting $websiteSetting
     * @return HexValue
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
}
