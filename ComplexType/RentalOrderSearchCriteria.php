<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalOrderSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalOrderSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $ID;

    /**
     * @var integer
     */
    protected $Number;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonID;

    /**
     * @var string
     */
    protected $StartDateTime;

    /**
     * @var string
     */
    protected $EndDateTime;

    /**
     * @var SimpleType\RentalOrderStatus
     */
    protected $RentalOrderStatus;

    /**
     * @var SimpleType\RentalAdministrativeStatus
     */
    protected $RentalAdministrativeStatus;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var RentalOrderIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\Guid[optional] $iD
     * @return RentalOrderSearchCriteria
     */
    public function setID(SimpleType\Guid $iD = null)
    {
        $this->ID = $iD;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param  integer[optional]         $number
     * @return RentalOrderSearchCriteria
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  SimpleType\Guid[optional] $personID
     * @return RentalOrderSearchCriteria
     */
    public function setPersonID(SimpleType\Guid $personID = null)
    {
        $this->PersonID = $personID;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonID()
    {
        return $this->PersonID;
    }

    /**
     * @param  string[optional]          $startDateTime
     * @return RentalOrderSearchCriteria
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
     * @param  string[optional]          $endDateTime
     * @return RentalOrderSearchCriteria
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
     * @param  SimpleType\RentalOrderStatus[optional] $rentalOrderStatus
     * @return RentalOrderSearchCriteria
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
     * @return RentalOrderSearchCriteria
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
     * @param  PagingCriteria[optional]  $paging
     * @return RentalOrderSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  RentalOrderIncludes[optional] $includes
     * @return RentalOrderSearchCriteria
     */
    public function setIncludes(RentalOrderIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return RentalOrderIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
