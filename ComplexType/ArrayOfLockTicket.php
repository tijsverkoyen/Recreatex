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
     * @var array
     */
    protected $LockTicket = array();

    /**
     * @param  array             $lockTicket
     * @return ArrayOfLockTicket
     */
    public function setLockTicket(array $lockTicket = array())
    {
        $this->LockTicket = $lockTicket;

        return $this;
    }

    /**
     * @return array
     */
    public function getLockTicket()
    {
        if (!is_array($this->LockTicket)) {
            return array($this->LockTicket);
        }

        return $this->LockTicket;
    }
}
