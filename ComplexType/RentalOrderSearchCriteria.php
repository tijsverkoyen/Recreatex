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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ID
     */
    protected $ID;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Number
     */
    protected $Number;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonID
     */
    protected $PersonID;

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
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var RentalOrderIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null      $iD
     * @return RentalOrderSearchCriteria
     */
    public function setID(SimpleType\guid $iD = null)
    {
        $this->ID = $iD;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param  integer|null              $number
     * @return RentalOrderSearchCriteria
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  SimpleType\guid|null      $personID
     * @return RentalOrderSearchCriteria
     */
    public function setPersonID(SimpleType\guid $personID = null)
    {
        $this->PersonID = $personID;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonID()
    {
        return $this->PersonID;
    }

    /**
     * @param  string|null               $startDateTime
     * @return RentalOrderSearchCriteria
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
     * @param  string|null               $endDateTime
     * @return RentalOrderSearchCriteria
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
     * @param  SimpleType\RentalOrderStatus|null $rentalOrderStatus
     * @return RentalOrderSearchCriteria
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
     * @return RentalOrderSearchCriteria
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
     * @param  PagingCriteria|null       $paging
     * @return RentalOrderSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria|null
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  RentalOrderIncludes|null  $includes
     * @return RentalOrderSearchCriteria
     */
    public function setIncludes(RentalOrderIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return RentalOrderIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
