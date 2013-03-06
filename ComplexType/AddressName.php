<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class AddressName extends ComplexTypeAbstract
{
    const CLASS_NAME = 'AddressName';

    /**
     * @var string
     */
    protected $First;

    /**
     * @var string
     */
    protected $Last;

    /**
     * @var string
     */
    protected $Middle;

    /**
     * @param  string[optional] $first
     * @return AddressName
     */
    public function setFirst($first)
    {
        $this->First = $first;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirst()
    {
        return $this->First;
    }

    /**
     * @param  string[optional] $last
     * @return AddressName
     */
    public function setLast($last)
    {
        $this->Last = $last;

        return $this;
    }

    /**
     * @return string
     */
    public function getLast()
    {
        return $this->Last;
    }

    /**
     * @param  string[optional] $middle
     * @return AddressName
     */
    public function setMiddle($middle)
    {
        $this->Middle = $middle;

        return $this;
    }

    /**
     * @return string
     */
    public function getMiddle()
    {
        return $this->Middle;
    }
}
