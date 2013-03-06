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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfLockTicket|null $Succeeded
     */
    protected $Succeeded;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfLockTicket|null $Failed
     */
    protected $Failed;

    /**
     * @param  ArrayOfLockTicket|null $succeeded
     * @return ExtendedLocks
     */
    public function setSucceeded(ArrayOfLockTicket $succeeded = null)
    {
        $this->Succeeded = $succeeded;

        return $this;
    }

    /**
     * @return ArrayOfLockTicket|null
     */
    public function getSucceeded()
    {
        return $this->Succeeded;
    }

    /**
     * @param  ArrayOfLockTicket|null $failed
     * @return ExtendedLocks
     */
    public function setFailed(ArrayOfLockTicket $failed = null)
    {
        $this->Failed = $failed;

        return $this;
    }

    /**
     * @return ArrayOfLockTicket|null
     */
    public function getFailed()
    {
        return $this->Failed;
    }

}
