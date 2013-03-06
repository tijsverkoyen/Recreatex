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

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var integer
     */
    protected $RentalNo;

    /**

     * @var integer
     */
    protected $RentalWebNo;

    /**

     * @var boolean
     */
    protected $WebCreated;

    /**

     * @var SimpleType\RentalOrderStatus
     */
    protected $RentalOrderStatus;

    /**

     * @var SimpleType\RentalAdministrativeStatus
     */
    protected $RentalAdministrativeStatus;

    /**

     * @var string
     */
    protected $CreationDate;

    /**

     * @var Person
     */
    protected $Customer;

    /**

     * @var string
     */
    protected $StartDateTime;

    /**

     * @var string
     */
    protected $EndDateTime;

    /**

     * @var string
     */
    protected $PlannedDeliveryDateTime;

    /**

     * @var string
     */
    protected $PlannedReturnDateTime;

    /**

     * @var string
     */
    protected $CancelDate;

    /**

     * @var string
     */
    protected $CancelDescription;

    /**

     * @var string
     */
    protected $Comment;

    /**

     * @var string
     */
    protected $RentalLocation;

    /**

     * @var float
     */
    protected $TotalAmount;

    /**

     * @var ArrayOfRentalOrderLine
     */
    protected $RentalOrderLines;

    /**

     * @var float
     */
    protected $Warranty;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return RentalOrder
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  integer[optional] $rentalNo
     * @return RentalOrder
     */
    public function setRentalNo($rentalNo)
    {
        $this->RentalNo = $rentalNo;

        return $this;
    }

    /**
     * @return integer
     */
    public function getRentalNo()
    {
        return $this->RentalNo;
    }

    /**
     * @param  integer[optional] $rentalWebNo
     * @return RentalOrder
     */
    public function setRentalWebNo($rentalWebNo)
    {
        $this->RentalWebNo = $rentalWebNo;

        return $this;
    }

    /**
     * @return integer
     */
    public function getRentalWebNo()
    {
        return $this->RentalWebNo;
    }

    /**
     * @param  boolean[optional] $webCreated
     * @return RentalOrder
     */
    public function setWebCreated($webCreated)
    {
        $this->WebCreated = $webCreated;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getWebCreated()
    {
        return $this->WebCreated;
    }

    /**
     * @param  SimpleType\RentalOrderStatus[optional] $rentalOrderStatus
     * @return RentalOrder
     */
    public function setRentalOrderStatus(SimpleType\RentalOrderStatus $rentalOrderStatus = null)
    {
        $this->RentalOrderStatus = $rentalOrderStatus;

        return $this;
    }

    /**
     * @return SimpleType\RentalOrderStatus
     */
    public function getRentalOrderStatus()
    {
        return $this->RentalOrderStatus;
    }

    /**
     * @param  SimpleType\RentalAdministrativeStatus[optional] $rentalAdministrativeStatus
     * @return RentalOrder
     */
    public function setRentalAdministrativeStatus(
        SimpleType\RentalAdministrativeStatus $rentalAdministrativeStatus = null
    ) {
        $this->RentalAdministrativeStatus = $rentalAdministrativeStatus;

        return $this;
    }

    /**
     * @return SimpleType\RentalAdministrativeStatus
     */
    public function getRentalAdministrativeStatus()
    {
        return $this->RentalAdministrativeStatus;
    }

    /**
     * @param  string[optional] $creationDate
     * @return RentalOrder
     */
    public function setCreationDate($creationDate)
    {
        $this->CreationDate = $creationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param  Person[optional] $customer
     * @return RentalOrder
     */
    public function setCustomer(Person $customer = null)
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * @return Person
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param  string[optional] $startDateTime
     * @return RentalOrder
     */
    public function setStartDateTime($startDateTime)
    {
        $this->StartDateTime = $startDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }

    /**
     * @param  string[optional] $endDateTime
     * @return RentalOrder
     */
    public function setEndDateTime($endDateTime)
    {
        $this->EndDateTime = $endDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }

    /**
     * @param  string[optional] $plannedDeliveryDateTime
     * @return RentalOrder
     */
    public function setPlannedDeliveryDateTime($plannedDeliveryDateTime)
    {
        $this->PlannedDeliveryDateTime = $plannedDeliveryDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlannedDeliveryDateTime()
    {
        return $this->PlannedDeliveryDateTime;
    }

    /**
     * @param  string[optional] $plannedReturnDateTime
     * @return RentalOrder
     */
    public function setPlannedReturnDateTime($plannedReturnDateTime)
    {
        $this->PlannedReturnDateTime = $plannedReturnDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlannedReturnDateTime()
    {
        return $this->PlannedReturnDateTime;
    }

    /**
     * @param  string[optional] $cancelDate
     * @return RentalOrder
     */
    public function setCancelDate($cancelDate)
    {
        $this->CancelDate = $cancelDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getCancelDate()
    {
        return $this->CancelDate;
    }

    /**
     * @param  string[optional] $cancelDescription
     * @return RentalOrder
     */
    public function setCancelDescription($cancelDescription)
    {
        $this->CancelDescription = $cancelDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getCancelDescription()
    {
        return $this->CancelDescription;
    }

    /**
     * @param  string[optional] $comment
     * @return RentalOrder
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  string[optional] $rentalLocation
     * @return RentalOrder
     */
    public function setRentalLocation($rentalLocation)
    {
        $this->RentalLocation = $rentalLocation;

        return $this;
    }

    /**
     * @return string
     */
    public function getRentalLocation()
    {
        return $this->RentalLocation;
    }

    /**
     * @param  float[optional] $totalAmount
     * @return RentalOrder
     */
    public function setTotalAmount($totalAmount)
    {
        $this->TotalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param  ArrayOfRentalOrderLine[optional] $rentalOrderLines
     * @return RentalOrder
     */
    public function setRentalOrderLines(ArrayOfRentalOrderLine $rentalOrderLines = null)
    {
        $this->RentalOrderLines = $rentalOrderLines;

        return $this;
    }

    /**
     * @return ArrayOfRentalOrderLine
     */
    public function getRentalOrderLines()
    {
        return $this->RentalOrderLines;
    }

    /**
     * @param  float[optional] $warranty
     * @return RentalOrder
     */
    public function setWarranty($warranty)
    {
        $this->Warranty = $warranty;

        return $this;
    }

    /**
     * @return float
     */
    public function getWarranty()
    {
        return $this->Warranty;
    }
}
