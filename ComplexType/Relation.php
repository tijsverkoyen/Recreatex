<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Relation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Relation';

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var Person
     */
    protected $Person;

    /**
     * @var SimpleType\RelationType
     */
    protected $Type;

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Relation
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
     * @param  Person[optional] $person
     * @return Relation
     */
    public function setPerson(Person $person = null)
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param  SimpleType\RelationType[optional] $type
     * @return Relation
     */
    public function setType(SimpleType\RelationType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\RelationType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param  string[optional] $comment
     * @return Relation
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }
}
