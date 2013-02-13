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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Available
     */
    protected $Available;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Blocked
     */
    protected $Blocked;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Locked
     */
    protected $Locked;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Option
     */
    protected $Option;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Reserved
     */
    protected $Reserved;

    /**
     * @param  integer|null        $available
     * @return SeatAllocationCount
     */
    public function setAvailable($available)
    {
        $this->Available = $available;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAvailable()
    {
        return $this->Available;
    }

    /**
     * @param  integer|null        $blocked
     * @return SeatAllocationCount
     */
    public function setBlocked($blocked)
    {
        $this->Blocked = $blocked;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getBlocked()
    {
        return $this->Blocked;
    }

    /**
     * @param  integer|null        $locked
     * @return SeatAllocationCount
     */
    public function setLocked($locked)
    {
        $this->Locked = $locked;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getLocked()
    {
        return $this->Locked;
    }

    /**
     * @param  integer|null        $option
     * @return SeatAllocationCount
     */
    public function setOption($option)
    {
        $this->Option = $option;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * @param  integer|null        $reserved
     * @return SeatAllocationCount
     */
    public function setReserved($reserved)
    {
        $this->Reserved = $reserved;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getReserved()
    {
        return $this->Reserved;
    }
}
