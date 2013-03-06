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
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ChildCareCentreId
     */
    protected $ChildCareCentreId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ChildCareCentrePeriodId
     */
    protected $ChildCareCentrePeriodId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From
     */
    protected $From;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Until
     */
    protected $Until;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Posted
     */
    protected $Posted;

    /**
     * @param  SimpleType\guid|null    $id
     * @return ChildCareCentrePresence
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
     * @param  SimpleType\guid|null    $personId
     * @return ChildCareCentrePresence
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  SimpleType\guid|null    $childCareCentreId
     * @return ChildCareCentrePresence
     */
    public function setChildCareCentreId(SimpleType\guid $childCareCentreId = null)
    {
        $this->ChildCareCentreId = $childCareCentreId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getChildCareCentreId()
    {
        return $this->ChildCareCentreId;
    }

    /**
     * @param  SimpleType\guid|null    $childCareCentrePeriodId
     * @return ChildCareCentrePresence
     */
    public function setChildCareCentrePeriodId(SimpleType\guid $childCareCentrePeriodId = null)
    {
        $this->ChildCareCentrePeriodId = $childCareCentrePeriodId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getChildCareCentrePeriodId()
    {
        return $this->ChildCareCentrePeriodId;
    }

    /**
     * @param  string|null             $from
     * @return ChildCareCentrePresence
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string|null             $until
     * @return ChildCareCentrePresence
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  boolean|null            $posted
     * @return ChildCareCentrePresence
     */
    public function setPosted($posted)
    {
        $this->Posted = $posted;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPosted()
    {
        return $this->Posted;
    }

}
