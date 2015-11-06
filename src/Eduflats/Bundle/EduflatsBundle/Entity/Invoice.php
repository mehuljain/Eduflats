<?php
namespace Eduflats\Bundle\EduflatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\Invoice
 *
 * @ORM\Entity()
 * @ORM\Table(name="invoice", indexes={@ORM\Index(name="fk_invoice_university1_idx", columns={"universityId"})})
 */
class Invoice
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
    protected $universityId;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $tInvoiceReference;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dGeneratedDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $dDueDate;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    protected $nOverdueCharges;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    protected $nTotalDue;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tDescription;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nPaymentMode;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bIsPaid;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dCreatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dUpdatedAt;

    /**
     * @ORM\OneToMany(targetEntity="Payment", mappedBy="invoice")
     * @ORM\JoinColumn(name="id", referencedColumnName="invoiceId")
     */
    protected $payments;

    /**
     * @ORM\ManyToOne(targetEntity="University", inversedBy="invoices")
     * @ORM\JoinColumn(name="universityId", referencedColumnName="id")
     */
    protected $university;

    public function __construct()
    {
        $this->payments = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\Invoice
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
     * Set the value of universityId.
     *
     * @param integer $universityId
     * @return \Entity\Invoice
     */
    public function setUniversityId($universityId)
    {
        $this->universityId = $universityId;

        return $this;
    }

    /**
     * Get the value of universityId.
     *
     * @return integer
     */
    public function getUniversityId()
    {
        return $this->universityId;
    }

    /**
     * Set the value of tInvoiceReference.
     *
     * @param string $tInvoiceReference
     * @return \Entity\Invoice
     */
    public function setTInvoiceReference($tInvoiceReference)
    {
        $this->tInvoiceReference = $tInvoiceReference;

        return $this;
    }

    /**
     * Get the value of tInvoiceReference.
     *
     * @return string
     */
    public function getTInvoiceReference()
    {
        return $this->tInvoiceReference;
    }

    /**
     * Set the value of dGeneratedDate.
     *
     * @param \DateTime $dGeneratedDate
     * @return \Entity\Invoice
     */
    public function setDGeneratedDate($dGeneratedDate)
    {
        $this->dGeneratedDate = $dGeneratedDate;

        return $this;
    }

    /**
     * Get the value of dGeneratedDate.
     *
     * @return \DateTime
     */
    public function getDGeneratedDate()
    {
        return $this->dGeneratedDate;
    }

    /**
     * Set the value of dDueDate.
     *
     * @param \DateTime $dDueDate
     * @return \Entity\Invoice
     */
    public function setDDueDate($dDueDate)
    {
        $this->dDueDate = $dDueDate;

        return $this;
    }

    /**
     * Get the value of dDueDate.
     *
     * @return \DateTime
     */
    public function getDDueDate()
    {
        return $this->dDueDate;
    }

    /**
     * Set the value of nOverdueCharges.
     *
     * @param float $nOverdueCharges
     * @return \Entity\Invoice
     */
    public function setNOverdueCharges($nOverdueCharges)
    {
        $this->nOverdueCharges = $nOverdueCharges;

        return $this;
    }

    /**
     * Get the value of nOverdueCharges.
     *
     * @return float
     */
    public function getNOverdueCharges()
    {
        return $this->nOverdueCharges;
    }

    /**
     * Set the value of nTotalDue.
     *
     * @param float $nTotalDue
     * @return \Entity\Invoice
     */
    public function setNTotalDue($nTotalDue)
    {
        $this->nTotalDue = $nTotalDue;

        return $this;
    }

    /**
     * Get the value of nTotalDue.
     *
     * @return float
     */
    public function getNTotalDue()
    {
        return $this->nTotalDue;
    }

    /**
     * Set the value of tDescription.
     *
     * @param string $tDescription
     * @return \Entity\Invoice
     */
    public function setTDescription($tDescription)
    {
        $this->tDescription = $tDescription;

        return $this;
    }

    /**
     * Get the value of tDescription.
     *
     * @return string
     */
    public function getTDescription()
    {
        return $this->tDescription;
    }

    /**
     * Set the value of nPaymentMode.
     *
     * @param integer $nPaymentMode
     * @return \Entity\Invoice
     */
    public function setNPaymentMode($nPaymentMode)
    {
        $this->nPaymentMode = $nPaymentMode;

        return $this;
    }

    /**
     * Get the value of nPaymentMode.
     *
     * @return integer
     */
    public function getNPaymentMode()
    {
        return $this->nPaymentMode;
    }

    /**
     * Set the value of bIsPaid.
     *
     * @param boolean $bIsPaid
     * @return \Entity\Invoice
     */
    public function setBIsPaid($bIsPaid)
    {
        $this->bIsPaid = $bIsPaid;

        return $this;
    }

    /**
     * Get the value of bIsPaid.
     *
     * @return boolean
     */
    public function getBIsPaid()
    {
        return $this->bIsPaid;
    }

    /**
     * Set the value of dCreatedAt.
     *
     * @param \DateTime $dCreatedAt
     * @return \Entity\Invoice
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
     * @return \Entity\Invoice
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
     * Add Payment entity to collection (one to many).
     *
     * @param \Entity\Payment $payment
     * @return \Entity\Invoice
     */
    public function addPayment(Payment $payment)
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * Remove Payment entity from collection (one to many).
     *
     * @param \Entity\Payment $payment
     * @return \Entity\Invoice
     */
    public function removePayment(Payment $payment)
    {
        $this->payments->removeElement($payment);

        return $this;
    }

    /**
     * Get Payment entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Set University entity (many to one).
     *
     * @param \Entity\University $university
     * @return \Entity\Invoice
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
        return array('id', 'universityId', 'tInvoiceReference', 'dGeneratedDate', 'dDueDate', 'nOverdueCharges', 'nTotalDue', 'tDescription', 'nPaymentMode', 'bIsPaid', 'dCreatedAt', 'dUpdatedAt');
    }
}
