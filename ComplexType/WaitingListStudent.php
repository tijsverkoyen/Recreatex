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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $WaitingListId;

    /**
     * @var string
     */
    protected $EntryDate;

    /**
     * @var string
     */
    protected $WaitingListCode;

    /**
     * @var string
     */
    protected $WaitingListDescription;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return WaitingListStudent
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\Guid[optional] $waitingListId
     * @return WaitingListStudent
     */
    public function setWaitingListId(SimpleType\Guid $waitingListId = null)
    {
        $this->WaitingListId = $waitingListId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getWaitingListId()
    {
        return $this->WaitingListId;
    }

    /**
     * @param  string[optional]   $entryDate
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
     * @param  string[optional]   $waitingListCode
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
     * @param  string[optional]   $waitingListDescription
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
     * @param  float[optional]    $price
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
