<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonName extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonName';

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
     * @param  string|null $first
     * @return PersonName
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
     * @return PersonName
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
     * @return PersonName
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
