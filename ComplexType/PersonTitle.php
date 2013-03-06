<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonTitle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonTitle';

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
     * @var string|null $ShortName
     */
    protected $ShortName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**
     * @param  SimpleType\guid|null $id
     * @return PersonTitle
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
     * @param  string|null $shortName
     * @return PersonTitle
     */
    public function setShortName($shortName)
    {
        $this->ShortName = $shortName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param  string|null $description
     * @return PersonTitle
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

}
