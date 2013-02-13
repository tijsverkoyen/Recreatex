<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfLockTicket extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfLockTicket';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var LockTicket[] $LockTicket
     */
    protected $LockTicket = array();

    /**
     * @param  LockTicket[]      $lockTicket
     * @return ArrayOfLockTicket
     */
    public function setLockTicket(array $lockTicket = array())
    {
        $this->LockTicket = $lockTicket;

        return $this;
    }

    /**
     * @return LockTicket[]
     */
    public function getLockTicket()
    {
        return $this->LockTicket;
    }
}
