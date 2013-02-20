<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SeatAllocationCount extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SeatAllocationCount';

    /**
     * @var integer
     */
    protected $Available;

    /**
     * @var integer
     */
    protected $Blocked;

    /**
     * @var integer
     */
    protected $Locked;

    /**
     * @var integer
     */
    protected $Option;

    /**
     * @var integer
     */
    protected $Reserved;

    /**
     * @param  integer[optional]   $available
     * @return SeatAllocationCount
     */
    public function setAvailable($available)
    {
        $this->Available = $available;

        return $this;
    }

    /**
     * @return integer
     */
    public function getAvailable()
    {
        return $this->Available;
    }

    /**
     * @param  integer[optional]   $blocked
     * @return SeatAllocationCount
     */
    public function setBlocked($blocked)
    {
        $this->Blocked = $blocked;

        return $this;
    }

    /**
     * @return integer
     */
    public function getBlocked()
    {
        return $this->Blocked;
    }

    /**
     * @param  integer[optional]   $locked
     * @return SeatAllocationCount
     */
    public function setLocked($locked)
    {
        $this->Locked = $locked;

        return $this;
    }

    /**
     * @return integer
     */
    public function getLocked()
    {
        return $this->Locked;
    }

    /**
     * @param  integer[optional]   $option
     * @return SeatAllocationCount
     */
    public function setOption($option)
    {
        $this->Option = $option;

        return $this;
    }

    /**
     * @return integer
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * @param  integer[optional]   $reserved
     * @return SeatAllocationCount
     */
    public function setReserved($reserved)
    {
        $this->Reserved = $reserved;

        return $this;
    }

    /**
     * @return integer
     */
    public function getReserved()
    {
        return $this->Reserved;
    }
}
