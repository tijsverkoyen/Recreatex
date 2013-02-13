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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExpirationTime
     */
    protected $ExpirationTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;


    /**
     * @param string|null $expirationTime
     * @return LockTicket
     */
    public function setExpirationTime($expirationTime)
    {
        $this->ExpirationTime = $expirationTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpirationTime()
    {
        return $this->ExpirationTime;
    }

    /**
     * @param SimpleType\guid|null $id
     * @return LockTicket
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


}

