<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * Infrastructure Domain Object
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Infrastructure extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Infrastructure';

    /**
     * Infrastructure Unique Identifier
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**
     * Infrastructure Name
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**
     * Infrastructure Description
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**
     * Infrastructure Location info
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $Location
     */
    protected $Location;

    /**
     * Infrastructure Comments
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comment
     */
    protected $Comment;

    /**
     * Infrastructure Date time of last change
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $LastChanged
     */
    protected $LastChanged;

    /**
     * Infrastructure related places
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPlace|null $Places
     */
    protected $Places;

    /**
     * Infrastructure division info
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Division|null $Division
     */
    protected $Division;

    /**
     * @param  SimpleType\guid|null $id
     * @return Infrastructure
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
     * @param  string|null    $name
     * @return Infrastructure
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  string|null    $description
     * @return Infrastructure
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  Address|null   $location
     * @return Infrastructure
     */
    public function setLocation(Address $location = null)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param  string|null    $comment
     * @return Infrastructure
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  string|null    $lastChanged
     * @return Infrastructure
     */
    public function setLastChanged($lastChanged)
    {
        $this->LastChanged = $lastChanged;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastChanged()
    {
        return $this->LastChanged;
    }

    /**
     * @param  ArrayOfPlace|null $places
     * @return Infrastructure
     */
    public function setPlaces(ArrayOfPlace $places = null)
    {
        $this->Places = $places;

        return $this;
    }

    /**
     * @return ArrayOfPlace|null
     */
    public function getPlaces()
    {
        return $this->Places;
    }

    /**
     * @param  Division|null  $division
     * @return Infrastructure
     */
    public function setDivision(Division $division = null)
    {
        $this->Division = $division;

        return $this;
    }

    /**
     * @return Division|null
     */
    public function getDivision()
    {
        return $this->Division;
    }

}
