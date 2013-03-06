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
     * @var string|null $Description
     */
    protected $Description;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Reserved
     */
    protected $Reserved;

    /**
     * @param  SimpleType\guid|null   $id
     * @return FitnessActivityDaySlot
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
     * @param  string|null            $description
     * @return FitnessActivityDaySlot
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
     * @param  boolean|null           $reserved
     * @return FitnessActivityDaySlot
     */
    public function setReserved($reserved)
    {
        $this->Reserved = $reserved;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getReserved()
    {
        return $this->Reserved;
    }

}
