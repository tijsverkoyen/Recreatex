<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonLLVInfo extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonLLVInfo';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var integer
     */
    protected $NumberPresent;

    /**
     * @var string
     */
    protected $StartDate;

    /**
     * @var string
     */
    protected $LastDate;

    /**
     * @var string
     */
    protected $StartDateLLV;

    /**
     * @var integer
     */
    protected $NumberPresentLevel;

    /**
     * @var string
     */
    protected $StartDateLevel;

    /**
     * @var integer
     */
    protected $NumberAbsent;

    /**
     * @var integer
     */
    protected $NumberRegistrations;

    /**
     * @var string
     */
    protected $SwimmingComment;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return PersonLLVInfo
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
     * @param  integer[optional] $numberPresent
     * @return PersonLLVInfo
     */
    public function setNumberPresent($numberPresent)
    {
        $this->NumberPresent = $numberPresent;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberPresent()
    {
        return $this->NumberPresent;
    }

    /**
     * @param  string[optional] $startDate
     * @return PersonLLVInfo
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  string[optional] $lastDate
     * @return PersonLLVInfo
     */
    public function setLastDate($lastDate)
    {
        $this->LastDate = $lastDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastDate()
    {
        return $this->LastDate;
    }

    /**
     * @param  string[optional] $startDateLLV
     * @return PersonLLVInfo
     */
    public function setStartDateLLV($startDateLLV)
    {
        $this->StartDateLLV = $startDateLLV;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateLLV()
    {
        return $this->StartDateLLV;
    }

    /**
     * @param  integer[optional] $numberPresentLevel
     * @return PersonLLVInfo
     */
    public function setNumberPresentLevel($numberPresentLevel)
    {
        $this->NumberPresentLevel = $numberPresentLevel;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberPresentLevel()
    {
        return $this->NumberPresentLevel;
    }

    /**
     * @param  string[optional] $startDateLevel
     * @return PersonLLVInfo
     */
    public function setStartDateLevel($startDateLevel)
    {
        $this->StartDateLevel = $startDateLevel;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateLevel()
    {
        return $this->StartDateLevel;
    }

    /**
     * @param  integer[optional] $numberAbsent
     * @return PersonLLVInfo
     */
    public function setNumberAbsent($numberAbsent)
    {
        $this->NumberAbsent = $numberAbsent;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberAbsent()
    {
        return $this->NumberAbsent;
    }

    /**
     * @param  integer[optional] $numberRegistrations
     * @return PersonLLVInfo
     */
    public function setNumberRegistrations($numberRegistrations)
    {
        $this->NumberRegistrations = $numberRegistrations;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberRegistrations()
    {
        return $this->NumberRegistrations;
    }

    /**
     * @param  string[optional] $swimmingComment
     * @return PersonLLVInfo
     */
    public function setSwimmingComment($swimmingComment)
    {
        $this->SwimmingComment = $swimmingComment;

        return $this;
    }

    /**
     * @return string
     */
    public function getSwimmingComment()
    {
        return $this->SwimmingComment;
    }
}
