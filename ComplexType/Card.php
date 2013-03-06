<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Card extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Card';

    /**
     * @var string
     */
    protected $CardNumber;

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Number;

    /**
     * @var PeripheralString
     */
    protected $PeripheralString;

    /**
     * @param  string[optional] $cardNumber
     * @return Card
     */
    public function setCardNumber($cardNumber)
    {
        $this->CardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Card
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional] $number
     * @return Card
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  PeripheralString[optional] $peripheralString
     * @return Card
     */
    public function setPeripheralString(PeripheralString $peripheralString = null)
    {
        $this->PeripheralString = $peripheralString;

        return $this;
    }

    /**
     * @return PeripheralString
     */
    public function getPeripheralString()
    {
        return $this->PeripheralString;
    }
}
