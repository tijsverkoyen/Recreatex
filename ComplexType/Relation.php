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
     * @var Person|null $From
     */
    protected $From;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Person|null $To
     */
    protected $To;

    /**
     * @param  Person|null $from
     * @return Relation
     */
    public function setFrom(Person $from = null)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  SimpleType\Guid|null $id
     * @return Relation
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
     * @param  Person|null $to
     * @return Relation
     */
    public function setTo(Person $to = null)
    {
        $this->To = $to;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getTo()
    {
        return $this->To;
    }
}
