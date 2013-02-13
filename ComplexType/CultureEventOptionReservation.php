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
     * @var SimpleType\Guid|null $CultureEventId
     */
    protected $CultureEventId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $CultureEventOptionId
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
     * @param  SimpleType\Guid|null          $cultureEventId
     * @return CultureEventOptionReservation
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  SimpleType\Guid|null          $cultureEventOptionId
     * @return CultureEventOptionReservation
     */
    public function setCultureEventOptionId(SimpleType\Guid $cultureEventOptionId = null)
    {
        $this->CultureEventOptionId = $cultureEventOptionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
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
