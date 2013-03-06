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
     * @var SimpleType\guid|null $ActivityId
     */
    protected $ActivityId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ActivityCode
     */
    protected $ActivityCode;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ActivityDesc
     */
    protected $ActivityDesc;

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
     * @var integer|null $EntryNo
     */
    protected $EntryNo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Price
     */
    protected $Price;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Status
     */
    protected $Status;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Deletable
     */
    protected $Deletable;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ActivityStartDate
     */
    protected $ActivityStartDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ActivityEndDate
     */
    protected $ActivityEndDate;

    /**
     * @param  SimpleType\guid|null $id
     * @return Entry
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
     * @param  SimpleType\guid|null $activityId
     * @return Entry
     */
    public function setActivityId(SimpleType\guid $activityId = null)
    {
        $this->ActivityId = $activityId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }

    /**
     * @param  string|null $activityCode
     * @return Entry
     */
    public function setActivityCode($activityCode)
    {
        $this->ActivityCode = $activityCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getActivityCode()
    {
        return $this->ActivityCode;
    }

    /**
     * @param  string|null $activityDesc
     * @return Entry
     */
    public function setActivityDesc($activityDesc)
    {
        $this->ActivityDesc = $activityDesc;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getActivityDesc()
    {
        return $this->ActivityDesc;
    }

    /**
     * @param  string|null $entryDate
     * @return Entry
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
     * @param  integer|null $entryNo
     * @return Entry
     */
    public function setEntryNo($entryNo)
    {
        $this->EntryNo = $entryNo;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getEntryNo()
    {
        return $this->EntryNo;
    }

    /**
     * @param  float|null $price
     * @return Entry
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

    /**
     * @param  integer|null $status
     * @return Entry
     */
    public function setStatus($status)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param  boolean|null $deletable
     * @return Entry
     */
    public function setDeletable($deletable)
    {
        $this->Deletable = $deletable;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getDeletable()
    {
        return $this->Deletable;
    }

    /**
     * @param  string|null $activityStartDate
     * @return Entry
     */
    public function setActivityStartDate($activityStartDate)
    {
        $this->ActivityStartDate = $activityStartDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getActivityStartDate()
    {
        return $this->ActivityStartDate;
    }

    /**
     * @param  string|null $activityEndDate
     * @return Entry
     */
    public function setActivityEndDate($activityEndDate)
    {
        $this->ActivityEndDate = $activityEndDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getActivityEndDate()
    {
        return $this->ActivityEndDate;
    }

}
