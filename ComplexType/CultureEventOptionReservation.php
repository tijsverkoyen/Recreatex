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
     * @var SimpleType\Guid
     */
    protected $CultureEventId;

    /**
     * @var SimpleType\Guid
     */
    protected $CultureEventOptionId;

    /**
     * @var integer
     */
    protected $Quantity;

    /**
     * @param  SimpleType\Guid[optional]     $cultureEventId
     * @return CultureEventOptionReservation
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  SimpleType\Guid[optional]     $cultureEventOptionId
     * @return CultureEventOptionReservation
     */
    public function setCultureEventOptionId(SimpleType\Guid $cultureEventOptionId = null)
    {
        $this->CultureEventOptionId = $cultureEventOptionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCultureEventOptionId()
    {
        return $this->CultureEventOptionId;
    }

    /**
     * @param  integer[optional]             $quantity
     * @return CultureEventOptionReservation
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return integer
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
}
