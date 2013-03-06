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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CardNumber
     */
    protected $CardNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Number
     */
    protected $Number;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PeripheralString|null $PeripheralString
     */
    protected $PeripheralString;

    /**
     * @param  string|null $cardNumber
     * @return Card
     */
    public function setCardNumber($cardNumber)
    {
        $this->CardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param  SimpleType\guid|null $id
     * @return Card
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string|null $number
     * @return Card
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  PeripheralString|null $peripheralString
     * @return Card
     */
    public function setPeripheralString(PeripheralString $peripheralString = null)
    {
        $this->PeripheralString = $peripheralString;

        return $this;
    }

    /**
     * @return PeripheralString|null
     */
    public function getPeripheralString()
    {
        return $this->PeripheralString;
    }

}
