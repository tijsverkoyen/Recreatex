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

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * Infrastructure Name

     * @var string
     */
    protected $Name;

    /**
     * Infrastructure Description

     * @var string
     */
    protected $Description;

    /**
     * Infrastructure Location info

     * @var Address
     */
    protected $Location;

    /**
     * Infrastructure Comments

     * @var string
     */
    protected $Comment;

    /**
     * Infrastructure Date time of last change

     * @var string
     */
    protected $LastChanged;

    /**
     * Infrastructure related places

     * @var ArrayOfPlace
     */
    protected $Places;

    /**
     * Infrastructure division info

     * @var Division
     */
    protected $Division;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Infrastructure
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
     * @param  string[optional] $name
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
     * @param  string[optional] $description
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
     * @param  Address[optional] $location
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
     * @param  string[optional] $comment
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
     * @param  string[optional] $lastChanged
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
     * @param  ArrayOfPlace[optional] $places
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
     * @param  Division[optional] $division
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
