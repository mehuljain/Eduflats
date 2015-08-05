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
 * Entity\Client
 *
 * @ORM\Entity(repositoryClass="ClientRepository")
 * @ORM\Table(name="client", indexes={@ORM\Index(name="fk_client_university1_idx", columns={"university_id"})})
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tLastName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tFirstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $username_canonical;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $email_canonical;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tOrganizationName;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $dJoining;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $dRelieving;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $tphone;

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
    protected $tState;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tCity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nCountry;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $nZipCode;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $enabled;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $salt;

    /**
     * @ORM\Column(name="`password`", type="string", length=255, nullable=true)
     */
    protected $password;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $last_login;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $locked;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $expired;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $expired_at;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $confirmation_token;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $password_requested_at;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $roles;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    protected $credentials_expired;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $credentials_expired_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updated_at;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $university_id;

    /**
     * @ORM\OneToMany(targetEntity="Property", mappedBy="client")
     * @ORM\JoinColumn(name="id", referencedColumnName="clientId")
     */
    protected $properties;

    /**
     * @ORM\ManyToOne(targetEntity="University", inversedBy="clients")
     * @ORM\JoinColumn(name="university_id", referencedColumnName="id")
     */
    protected $university;

    public function __construct()
    {
        $this->properties = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\Client
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
     * Set the value of tLastName.
     *
     * @param string $tLastName
     * @return \Entity\Client
     */
    public function setTLastName($tLastName)
    {
        $this->tLastName = $tLastName;

        return $this;
    }

    /**
     * Get the value of tLastName.
     *
     * @return string
     */
    public function getTLastName()
    {
        return $this->tLastName;
    }

    /**
     * Set the value of tFirstName.
     *
     * @param string $tFirstName
     * @return \Entity\Client
     */
    public function setTFirstName($tFirstName)
    {
        $this->tFirstName = $tFirstName;

        return $this;
    }

    /**
     * Get the value of tFirstName.
     *
     * @return string
     */
    public function getTFirstName()
    {
        return $this->tFirstName;
    }

    /**
     * Set the value of username.
     *
     * @param string $username
     * @return \Entity\Client
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of email.
     *
     * @param string $email
     * @return \Entity\Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of username_canonical.
     *
     * @param string $username_canonical
     * @return \Entity\Client
     */
    public function setUsernameCanonical($username_canonical)
    {
        $this->username_canonical = $username_canonical;

        return $this;
    }

    /**
     * Get the value of username_canonical.
     *
     * @return string
     */
    public function getUsernameCanonical()
    {
        return $this->username_canonical;
    }

    /**
     * Set the value of email_canonical.
     *
     * @param string $email_canonical
     * @return \Entity\Client
     */
    public function setEmailCanonical($email_canonical)
    {
        $this->email_canonical = $email_canonical;

        return $this;
    }

    /**
     * Get the value of email_canonical.
     *
     * @return string
     */
    public function getEmailCanonical()
    {
        return $this->email_canonical;
    }

    /**
     * Set the value of tOrganizationName.
     *
     * @param string $tOrganizationName
     * @return \Entity\Client
     */
    public function setTOrganizationName($tOrganizationName)
    {
        $this->tOrganizationName = $tOrganizationName;

        return $this;
    }

    /**
     * Get the value of tOrganizationName.
     *
     * @return string
     */
    public function getTOrganizationName()
    {
        return $this->tOrganizationName;
    }

    /**
     * Set the value of dJoining.
     *
     * @param \DateTime $dJoining
     * @return \Entity\Client
     */
    public function setDJoining($dJoining)
    {
        $this->dJoining = $dJoining;

        return $this;
    }

    /**
     * Get the value of dJoining.
     *
     * @return \DateTime
     */
    public function getDJoining()
    {
        return $this->dJoining;
    }

    /**
     * Set the value of dRelieving.
     *
     * @param \DateTime $dRelieving
     * @return \Entity\Client
     */
    public function setDRelieving($dRelieving)
    {
        $this->dRelieving = $dRelieving;

        return $this;
    }

    /**
     * Get the value of dRelieving.
     *
     * @return \DateTime
     */
    public function getDRelieving()
    {
        return $this->dRelieving;
    }

    /**
     * Set the value of tphone.
     *
     * @param string $tphone
     * @return \Entity\Client
     */
    public function setTphone($tphone)
    {
        $this->tphone = $tphone;

        return $this;
    }

    /**
     * Get the value of tphone.
     *
     * @return string
     */
    public function getTphone()
    {
        return $this->tphone;
    }

    /**
     * Set the value of tAddressTitle.
     *
     * @param string $tAddressTitle
     * @return \Entity\Client
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
     * @return \Entity\Client
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
     * @return \Entity\Client
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
     * Set the value of tState.
     *
     * @param string $tState
     * @return \Entity\Client
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
     * Set the value of tCity.
     *
     * @param string $tCity
     * @return \Entity\Client
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
     * Set the value of nCountry.
     *
     * @param integer $nCountry
     * @return \Entity\Client
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
     * Set the value of nZipCode.
     *
     * @param string $nZipCode
     * @return \Entity\Client
     */
    public function setNZipCode($nZipCode)
    {
        $this->nZipCode = $nZipCode;

        return $this;
    }

    /**
     * Get the value of nZipCode.
     *
     * @return string
     */
    public function getNZipCode()
    {
        return $this->nZipCode;
    }

    /**
     * Set the value of enabled.
     *
     * @param boolean $enabled
     * @return \Entity\Client
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get the value of enabled.
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set the value of salt.
     *
     * @param string $salt
     * @return \Entity\Client
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get the value of salt.
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set the value of password.
     *
     * @param string $password
     * @return \Entity\Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of last_login.
     *
     * @param \DateTime $last_login
     * @return \Entity\Client
     */
    public function setLastLogin($last_login)
    {
        $this->last_login = $last_login;

        return $this;
    }

    /**
     * Get the value of last_login.
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * Set the value of locked.
     *
     * @param boolean $locked
     * @return \Entity\Client
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get the value of locked.
     *
     * @return boolean
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set the value of expired.
     *
     * @param boolean $expired
     * @return \Entity\Client
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;

        return $this;
    }

    /**
     * Get the value of expired.
     *
     * @return boolean
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Set the value of expired_at.
     *
     * @param \DateTime $expired_at
     * @return \Entity\Client
     */
    public function setExpiredAt($expired_at)
    {
        $this->expired_at = $expired_at;

        return $this;
    }

    /**
     * Get the value of expired_at.
     *
     * @return \DateTime
     */
    public function getExpiredAt()
    {
        return $this->expired_at;
    }

    /**
     * Set the value of confirmation_token.
     *
     * @param string $confirmation_token
     * @return \Entity\Client
     */
    public function setConfirmationToken($confirmation_token)
    {
        $this->confirmation_token = $confirmation_token;

        return $this;
    }

    /**
     * Get the value of confirmation_token.
     *
     * @return string
     */
    public function getConfirmationToken()
    {
        return $this->confirmation_token;
    }

    /**
     * Set the value of password_requested_at.
     *
     * @param \DateTime $password_requested_at
     * @return \Entity\Client
     */
    public function setPasswordRequestedAt($password_requested_at)
    {
        $this->password_requested_at = $password_requested_at;

        return $this;
    }

    /**
     * Get the value of password_requested_at.
     *
     * @return \DateTime
     */
    public function getPasswordRequestedAt()
    {
        return $this->password_requested_at;
    }

    /**
     * Set the value of roles.
     *
     * @param string $roles
     * @return \Entity\Client
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get the value of roles.
     *
     * @return string
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set the value of credentials_expired.
     *
     * @param integer $credentials_expired
     * @return \Entity\Client
     */
    public function setCredentialsExpired($credentials_expired)
    {
        $this->credentials_expired = $credentials_expired;

        return $this;
    }

    /**
     * Get the value of credentials_expired.
     *
     * @return integer
     */
    public function getCredentialsExpired()
    {
        return $this->credentials_expired;
    }

    /**
     * Set the value of credentials_expired_at.
     *
     * @param \DateTime $credentials_expired_at
     * @return \Entity\Client
     */
    public function setCredentialsExpiredAt($credentials_expired_at)
    {
        $this->credentials_expired_at = $credentials_expired_at;

        return $this;
    }

    /**
     * Get the value of credentials_expired_at.
     *
     * @return \DateTime
     */
    public function getCredentialsExpiredAt()
    {
        return $this->credentials_expired_at;
    }

    /**
     * Set the value of created_at.
     *
     * @param \DateTime $created_at
     * @return \Entity\Client
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of created_at.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of updated_at.
     *
     * @param \DateTime $updated_at
     * @return \Entity\Client
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of updated_at.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of university_id.
     *
     * @param integer $university_id
     * @return \Entity\Client
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
     * Add Property entity to collection (one to many).
     *
     * @param \Entity\Property $property
     * @return \Entity\Client
     */
    public function addProperty(Property $property)
    {
        $this->properties[] = $property;

        return $this;
    }

    /**
     * Remove Property entity from collection (one to many).
     *
     * @param \Entity\Property $property
     * @return \Entity\Client
     */
    public function removeProperty(Property $property)
    {
        $this->properties->removeElement($property);

        return $this;
    }

    /**
     * Get Property entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Set University entity (many to one).
     *
     * @param \Entity\University $university
     * @return \Entity\Client
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
        return array('id', 'tLastName', 'tFirstName', 'username', 'email', 'username_canonical', 'email_canonical', 'tOrganizationName', 'dJoining', 'dRelieving', 'tphone', 'tAddressTitle', 'tStreet1', 'tStreet2', 'tState', 'tCity', 'nCountry', 'nZipCode', 'enabled', 'salt', 'password', 'last_login', 'locked', 'expired', 'expired_at', 'confirmation_token', 'password_requested_at', 'roles', 'credentials_expired', 'credentials_expired_at', 'created_at', 'updated_at', 'university_id');
    }
}