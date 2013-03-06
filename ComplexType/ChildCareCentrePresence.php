<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareCentrePresence extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareCentrePresence';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var SimpleTypeGuid
     */
    protected $ChildCareCentreId;

    /**
     * @var SimpleTypeGuid
     */
    protected $ChildCareCentrePeriodId;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @var boolean
     */
    protected $Posted;

    /**
     * @param  SimpleType\guid[optional] $id
     * @return ChildCareCentrePresence
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\guid[optional] $personId
     * @return ChildCareCentrePresence
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  SimpleType\guid[optional] $childCareCentreId
     * @return ChildCareCentrePresence
     */
    public function setChildCareCentreId(SimpleType\guid $childCareCentreId = null)
    {
        $this->ChildCareCentreId = $childCareCentreId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getChildCareCentreId()
    {
        return $this->ChildCareCentreId;
    }

    /**
     * @param  SimpleType\guid[optional] $childCareCentrePeriodId
     * @return ChildCareCentrePresence
     */
    public function setChildCareCentrePeriodId(SimpleType\guid $childCareCentrePeriodId = null)
    {
        $this->ChildCareCentrePeriodId = $childCareCentrePeriodId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getChildCareCentrePeriodId()
    {
        return $this->ChildCareCentrePeriodId;
    }

    /**
     * @param  string[optional]        $from
     * @return ChildCareCentrePresence
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string[optional]        $until
     * @return ChildCareCentrePresence
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  boolean[optional]       $posted
     * @return ChildCareCentrePresence
     */
    public function setPosted($posted)
    {
        $this->Posted = $posted;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPosted()
    {
        return $this->Posted;
    }
}
