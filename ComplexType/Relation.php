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
     * @var Person|null $Person
     */
    protected $Person;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RelationType|null $Type
     */
    protected $Type;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comment
     */
    protected $Comment;

    /**
     * @param  SimpleType\guid|null $id
     * @return Relation
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
     * @param  Person|null $person
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
     * @param  SimpleType\RelationType|null $type
     * @return Relation
     */
    public function setType(SimpleType\RelationType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\RelationType|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param  string|null $comment
     * @return Relation
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

}
