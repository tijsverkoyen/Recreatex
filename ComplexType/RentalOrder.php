<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalOrder extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalOrder';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $RentalNo
     */
    protected $RentalNo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $RentalWebNo
     */
    protected $RentalWebNo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $WebCreated
     */
    protected $WebCreated;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RentalOrderStatus|null $RentalOrderStatus
     */
    protected $RentalOrderStatus;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RentalAdministrativeStatus|null $RentalAdministrativeStatus
     */
    protected $RentalAdministrativeStatus;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CreationDate
     */
    protected $CreationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Person|null $Customer
     */
    protected $Customer;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDateTime
     */
    protected $StartDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EndDateTime
     */
    protected $EndDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PlannedDeliveryDateTime
     */
    protected $PlannedDeliveryDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PlannedReturnDateTime
     */
    protected $PlannedReturnDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CancelDate
     */
    protected $CancelDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CancelDescription
     */
    protected $CancelDescription;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comment
     */
    protected $Comment;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $RentalLocation
     */
    protected $RentalLocation;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $TotalAmount
     */
    protected $TotalAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfRentalOrderLine|null $RentalOrderLines
     */
    protected $RentalOrderLines;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Warranty
     */
    protected $Warranty;

    /**
     * @param  SimpleType\guid|null $id
     * @return RentalOrder
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  integer|null $rentalNo
     * @return RentalOrder
     */
    public function setRentalNo($rentalNo)
    {
        $this->RentalNo = $rentalNo;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getRentalNo()
    {
        return $this->RentalNo;
    }

    /**
     * @param  integer|null $rentalWebNo
     * @return RentalOrder
     */
    public function setRentalWebNo($rentalWebNo)
    {
        $this->RentalWebNo = $rentalWebNo;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getRentalWebNo()
    {
        return $this->RentalWebNo;
    }

    /**
     * @param  boolean|null $webCreated
     * @return RentalOrder
     */
    public function setWebCreated($webCreated)
    {
        $this->WebCreated = $webCreated;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getWebCreated()
    {
        return $this->WebCreated;
    }

    /**
     * @param  SimpleType\RentalOrderStatus|null $rentalOrderStatus
     * @return RentalOrder
     */
    public function setRentalOrderStatus(SimpleType\RentalOrderStatus $rentalOrderStatus = null)
    {
        $this->RentalOrderStatus = $rentalOrderStatus;

        return $this;
    }

    /**
     * @return SimpleType\RentalOrderStatus|null
     */
    public function getRentalOrderStatus()
    {
        return $this->RentalOrderStatus;
    }

    /**
     * @param  SimpleType\RentalAdministrativeStatus|null $rentalAdministrativeStatus
     * @return RentalOrder
     */
    public function setRentalAdministrativeStatus(SimpleType\RentalAdministrativeStatus $rentalAdministrativeStatus = null)
    {
        $this->RentalAdministrativeStatus = $rentalAdministrativeStatus;

        return $this;
    }

    /**
     * @return SimpleType\RentalAdministrativeStatus|null
     */
    public function getRentalAdministrativeStatus()
    {
        return $this->RentalAdministrativeStatus;
    }

    /**
     * @param  string|null $creationDate
     * @return RentalOrder
     */
    public function setCreationDate($creationDate)
    {
        $this->CreationDate = $creationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param  Person|null $customer
     * @return RentalOrder
     */
    public function setCustomer(Person $customer = null)
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param  string|null $startDateTime
     * @return RentalOrder
     */
    public function setStartDateTime($startDateTime)
    {
        $this->StartDateTime = $startDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }

    /**
     * @param  string|null $endDateTime
     * @return RentalOrder
     */
    public function setEndDateTime($endDateTime)
    {
        $this->EndDateTime = $endDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }

    /**
     * @param  string|null $plannedDeliveryDateTime
     * @return RentalOrder
     */
    public function setPlannedDeliveryDateTime($plannedDeliveryDateTime)
    {
        $this->PlannedDeliveryDateTime = $plannedDeliveryDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPlannedDeliveryDateTime()
    {
        return $this->PlannedDeliveryDateTime;
    }

    /**
     * @param  string|null $plannedReturnDateTime
     * @return RentalOrder
     */
    public function setPlannedReturnDateTime($plannedReturnDateTime)
    {
        $this->PlannedReturnDateTime = $plannedReturnDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPlannedReturnDateTime()
    {
        return $this->PlannedReturnDateTime;
    }

    /**
     * @param  string|null $cancelDate
     * @return RentalOrder
     */
    public function setCancelDate($cancelDate)
    {
        $this->CancelDate = $cancelDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCancelDate()
    {
        return $this->CancelDate;
    }

    /**
     * @param  string|null $cancelDescription
     * @return RentalOrder
     */
    public function setCancelDescription($cancelDescription)
    {
        $this->CancelDescription = $cancelDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCancelDescription()
    {
        return $this->CancelDescription;
    }

    /**
     * @param  string|null $comment
     * @return RentalOrder
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  string|null $rentalLocation
     * @return RentalOrder
     */
    public function setRentalLocation($rentalLocation)
    {
        $this->RentalLocation = $rentalLocation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRentalLocation()
    {
        return $this->RentalLocation;
    }

    /**
     * @param  float|null  $totalAmount
     * @return RentalOrder
     */
    public function setTotalAmount($totalAmount)
    {
        $this->TotalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param  ArrayOfRentalOrderLine|null $rentalOrderLines
     * @return RentalOrder
     */
    public function setRentalOrderLines(ArrayOfRentalOrderLine $rentalOrderLines = null)
    {
        $this->RentalOrderLines = $rentalOrderLines;

        return $this;
    }

    /**
     * @return ArrayOfRentalOrderLine|null
     */
    public function getRentalOrderLines()
    {
        return $this->RentalOrderLines;
    }

    /**
     * @param  float|null  $warranty
     * @return RentalOrder
     */
    public function setWarranty($warranty)
    {
        $this->Warranty = $warranty;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getWarranty()
    {
        return $this->Warranty;
    }

}
