<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfDeliveryAddress extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfDeliveryAddress';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var DeliveryAddress[] $DeliveryAddress
     */
    protected $DeliveryAddress = array();

    /**
     * @param  DeliveryAddress[]      $deliveryAddress
     * @return ArrayOfDeliveryAddress
     */
    public function setDeliveryAddress(array $deliveryAddress = array())
    {
        $this->DeliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * @return DeliveryAddress[]
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }

}
