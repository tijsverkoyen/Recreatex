<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionPeriod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SubscriptionPeriod';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var Duration
     */
    protected $Duration;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return SubscriptionPeriod
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
     * @param  string[optional]   $code
     * @return SubscriptionPeriod
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string[optional]   $name
     * @return SubscriptionPeriod
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
     * @param  Duration[optional] $duration
     * @return SubscriptionPeriod
     */
    public function setDuration(Duration $duration = null)
    {
        $this->Duration = $duration;

        return $this;
    }

    /**
     * @return Duration|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
}
