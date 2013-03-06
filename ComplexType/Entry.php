<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Entry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Entry';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $ActivityId;

    /**
     * @var string
     */
    protected $ActivityCode;

    /**
     * @var string
     */
    protected $ActivityDesc;

    /**
     * @var string
     */
    protected $EntryDate;

    /**
     * @var integer
     */
    protected $EntryNo;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var integer
     */
    protected $Status;

    /**
     * @var boolean
     */
    protected $Deletable;

    /**
     * @var string
     */
    protected $ActivityStartDate;

    /**
     * @var string
     */
    protected $ActivityEndDate;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Entry
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
     * @param  SimpleType\Guid[optional] $activityId
     * @return Entry
     */
    public function setActivityId(SimpleType\Guid $activityId = null)
    {
        $this->ActivityId = $activityId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }

    /**
     * @param  string[optional] $activityCode
     * @return Entry
     */
    public function setActivityCode($activityCode)
    {
        $this->ActivityCode = $activityCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getActivityCode()
    {
        return $this->ActivityCode;
    }

    /**
     * @param  string[optional] $activityDesc
     * @return Entry
     */
    public function setActivityDesc($activityDesc)
    {
        $this->ActivityDesc = $activityDesc;

        return $this;
    }

    /**
     * @return string
     */
    public function getActivityDesc()
    {
        return $this->ActivityDesc;
    }

    /**
     * @param  string[optional] $entryDate
     * @return Entry
     */
    public function setEntryDate($entryDate)
    {
        $this->EntryDate = $entryDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntryDate()
    {
        return $this->EntryDate;
    }

    /**
     * @param  integer[optional] $entryNo
     * @return Entry
     */
    public function setEntryNo($entryNo)
    {
        $this->EntryNo = $entryNo;

        return $this;
    }

    /**
     * @return integer
     */
    public function getEntryNo()
    {
        return $this->EntryNo;
    }

    /**
     * @param  float[optional] $price
     * @return Entry
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  integer[optional] $status
     * @return Entry
     */
    public function setStatus($status)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * @return integer
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param  boolean[optional] $deletable
     * @return Entry
     */
    public function setDeletable($deletable)
    {
        $this->Deletable = $deletable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDeletable()
    {
        return $this->Deletable;
    }

    /**
     * @param  string[optional] $activityStartDate
     * @return Entry
     */
    public function setActivityStartDate($activityStartDate)
    {
        $this->ActivityStartDate = $activityStartDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getActivityStartDate()
    {
        return $this->ActivityStartDate;
    }

    /**
     * @param  string[optional] $activityEndDate
     * @return Entry
     */
    public function setActivityEndDate($activityEndDate)
    {
        $this->ActivityEndDate = $activityEndDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getActivityEndDate()
    {
        return $this->ActivityEndDate;
    }
}
