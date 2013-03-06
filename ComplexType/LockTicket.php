<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class LockTicket extends ComplexTypeAbstract
{
    const CLASS_NAME = 'LockTicket';

    /**
     * @var string
     */
    protected $ExpirationTime;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @param  string[optional] $expirationTime
     * @return LockTicket
     */
    public function setExpirationTime($expirationTime)
    {
        $this->ExpirationTime = $expirationTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationTime()
    {
        return $this->ExpirationTime;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return LockTicket
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
}
