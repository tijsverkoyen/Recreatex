<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExtendedLocks extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExtendedLocks';

    /**
     * @var ArrayOfLockTicket
     */
    protected $Succeeded;

    /**
     * @var ArrayOfLockTicket
     */
    protected $Failed;

    /**
     * @param  ArrayOfLockTicket[optional] $succeeded
     * @return ExtendedLocks
     */
    public function setSucceeded(ArrayOfLockTicket $succeeded = null)
    {
        $this->Succeeded = $succeeded;

        return $this;
    }

    /**
     * @return ArrayOfLockTicket
     */
    public function getSucceeded()
    {
        return $this->Succeeded;
    }

    /**
     * @param  ArrayOfLockTicket[optional] $failed
     * @return ExtendedLocks
     */
    public function setFailed(ArrayOfLockTicket $failed = null)
    {
        $this->Failed = $failed;

        return $this;
    }

    /**
     * @return ArrayOfLockTicket
     */
    public function getFailed()
    {
        return $this->Failed;
    }
}
