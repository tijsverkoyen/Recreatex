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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $First
     */
    protected $First;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Last
     */
    protected $Last;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Middle
     */
    protected $Middle;

    /**
     * @param  string|null $first
     * @return AddressName
     */
    public function setFirst($first)
    {
        $this->First = $first;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirst()
    {
        return $this->First;
    }

    /**
     * @param  string|null $last
     * @return AddressName
     */
    public function setLast($last)
    {
        $this->Last = $last;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLast()
    {
        return $this->Last;
    }

    /**
     * @param  string|null $middle
     * @return AddressName
     */
    public function setMiddle($middle)
    {
        $this->Middle = $middle;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMiddle()
    {
        return $this->Middle;
    }

}
