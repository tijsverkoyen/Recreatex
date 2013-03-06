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
     * @var integer
     */
    protected $FromAge;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var integer
     */
    protected $UntilAge;

    /**
     * @param  integer[optional] $fromAge
     * @return AgeCategory
     */
    public function setFromAge($fromAge)
    {
        $this->FromAge = $fromAge;

        return $this;
    }

    /**
     * @return integer
     */
    public function getFromAge()
    {
        return $this->FromAge;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return AgeCategory
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
     * @param  string[optional] $name
     * @return AgeCategory
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  integer[optional] $untilAge
     * @return AgeCategory
     */
    public function setUntilAge($untilAge)
    {
        $this->UntilAge = $untilAge;

        return $this;
    }

    /**
     * @return integer
     */
    public function getUntilAge()
    {
        return $this->UntilAge;
    }
}
