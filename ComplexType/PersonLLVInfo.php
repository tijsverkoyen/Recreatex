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
     * @var integer|null $NumberPresent
     */
    protected $NumberPresent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDate
     */
    protected $StartDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $LastDate
     */
    protected $LastDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDateLLV
     */
    protected $StartDateLLV;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberPresentLevel
     */
    protected $NumberPresentLevel;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDateLevel
     */
    protected $StartDateLevel;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberAbsent
     */
    protected $NumberAbsent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberRegistrations
     */
    protected $NumberRegistrations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $SwimmingComment
     */
    protected $SwimmingComment;

    /**
     * @param  SimpleType\guid|null $id
     * @return PersonLLVInfo
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
     * @param  integer|null  $numberPresent
     * @return PersonLLVInfo
     */
    public function setNumberPresent($numberPresent)
    {
        $this->NumberPresent = $numberPresent;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberPresent()
    {
        return $this->NumberPresent;
    }

    /**
     * @param  string|null   $startDate
     * @return PersonLLVInfo
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  string|null   $lastDate
     * @return PersonLLVInfo
     */
    public function setLastDate($lastDate)
    {
        $this->LastDate = $lastDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastDate()
    {
        return $this->LastDate;
    }

    /**
     * @param  string|null   $startDateLLV
     * @return PersonLLVInfo
     */
    public function setStartDateLLV($startDateLLV)
    {
        $this->StartDateLLV = $startDateLLV;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDateLLV()
    {
        return $this->StartDateLLV;
    }

    /**
     * @param  integer|null  $numberPresentLevel
     * @return PersonLLVInfo
     */
    public function setNumberPresentLevel($numberPresentLevel)
    {
        $this->NumberPresentLevel = $numberPresentLevel;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberPresentLevel()
    {
        return $this->NumberPresentLevel;
    }

    /**
     * @param  string|null   $startDateLevel
     * @return PersonLLVInfo
     */
    public function setStartDateLevel($startDateLevel)
    {
        $this->StartDateLevel = $startDateLevel;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDateLevel()
    {
        return $this->StartDateLevel;
    }

    /**
     * @param  integer|null  $numberAbsent
     * @return PersonLLVInfo
     */
    public function setNumberAbsent($numberAbsent)
    {
        $this->NumberAbsent = $numberAbsent;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberAbsent()
    {
        return $this->NumberAbsent;
    }

    /**
     * @param  integer|null  $numberRegistrations
     * @return PersonLLVInfo
     */
    public function setNumberRegistrations($numberRegistrations)
    {
        $this->NumberRegistrations = $numberRegistrations;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberRegistrations()
    {
        return $this->NumberRegistrations;
    }

    /**
     * @param  string|null   $swimmingComment
     * @return PersonLLVInfo
     */
    public function setSwimmingComment($swimmingComment)
    {
        $this->SwimmingComment = $swimmingComment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSwimmingComment()
    {
        return $this->SwimmingComment;
    }

}
