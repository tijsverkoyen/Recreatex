<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class WaitingListStudent extends ComplexTypeAbstract
{
    const CLASS_NAME = 'WaitingListStudent';

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
     * @var SimpleType\guid|null $WaitingListId
     */
    protected $WaitingListId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EntryDate
     */
    protected $EntryDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $WaitingListCode
     */
    protected $WaitingListCode;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $WaitingListDescription
     */
    protected $WaitingListDescription;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Price
     */
    protected $Price;

    /**
     * @param  SimpleType\guid|null $id
     * @return WaitingListStudent
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
     * @param  SimpleType\guid|null $waitingListId
     * @return WaitingListStudent
     */
    public function setWaitingListId(SimpleType\guid $waitingListId = null)
    {
        $this->WaitingListId = $waitingListId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getWaitingListId()
    {
        return $this->WaitingListId;
    }

    /**
     * @param  string|null        $entryDate
     * @return WaitingListStudent
     */
    public function setEntryDate($entryDate)
    {
        $this->EntryDate = $entryDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntryDate()
    {
        return $this->EntryDate;
    }

    /**
     * @param  string|null        $waitingListCode
     * @return WaitingListStudent
     */
    public function setWaitingListCode($waitingListCode)
    {
        $this->WaitingListCode = $waitingListCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWaitingListCode()
    {
        return $this->WaitingListCode;
    }

    /**
     * @param  string|null        $waitingListDescription
     * @return WaitingListStudent
     */
    public function setWaitingListDescription($waitingListDescription)
    {
        $this->WaitingListDescription = $waitingListDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWaitingListDescription()
    {
        return $this->WaitingListDescription;
    }

    /**
     * @param  float|null         $price
     * @return WaitingListStudent
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

}
