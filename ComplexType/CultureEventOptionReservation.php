<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventOptionReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventOptionReservation';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CultureEventId
     */
    protected $CultureEventId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CultureEventOptionId
     */
    protected $CultureEventOptionId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Quantity
     */
    protected $Quantity;

    /**
     * @param  SimpleType\guid|null          $cultureEventId
     * @return CultureEventOptionReservation
     */
    public function setCultureEventId(SimpleType\guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  SimpleType\guid|null          $cultureEventOptionId
     * @return CultureEventOptionReservation
     */
    public function setCultureEventOptionId(SimpleType\guid $cultureEventOptionId = null)
    {
        $this->CultureEventOptionId = $cultureEventOptionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureEventOptionId()
    {
        return $this->CultureEventOptionId;
    }

    /**
     * @param  integer|null                  $quantity
     * @return CultureEventOptionReservation
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

}
