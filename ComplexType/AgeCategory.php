<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class AgeCategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'AgeCategory';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $FromAge
     */
    protected $FromAge;

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
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $UntilAge
     */
    protected $UntilAge;

    /**
     * @param  integer|null $fromAge
     * @return AgeCategory
     */
    public function setFromAge($fromAge)
    {
        $this->FromAge = $fromAge;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getFromAge()
    {
        return $this->FromAge;
    }

    /**
     * @param  SimpleType\guid|null $id
     * @return AgeCategory
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
     * @param  string|null $name
     * @return AgeCategory
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
     * @param  integer|null $untilAge
     * @return AgeCategory
     */
    public function setUntilAge($untilAge)
    {
        $this->UntilAge = $untilAge;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getUntilAge()
    {
        return $this->UntilAge;
    }

}
