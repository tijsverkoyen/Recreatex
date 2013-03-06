<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FitnessActivityDaySlot extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FitnessActivityDaySlot';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var boolean
     */
    protected $Reserved;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return FitnessActivityDaySlot
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
     * @param  string[optional]       $description
     * @return FitnessActivityDaySlot
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  boolean[optional]      $reserved
     * @return FitnessActivityDaySlot
     */
    public function setReserved($reserved)
    {
        $this->Reserved = $reserved;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getReserved()
    {
        return $this->Reserved;
    }
}
