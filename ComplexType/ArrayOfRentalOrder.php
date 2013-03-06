<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfRentalOrder extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfRentalOrder';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var RentalOrder[] $RentalOrder
     */
    protected $RentalOrder = array();

    /**
     * @param  RentalOrder[]      $rentalOrder
     * @return ArrayOfRentalOrder
     */
    public function setRentalOrder(array $rentalOrder = array())
    {
        $this->RentalOrder = $rentalOrder;

        return $this;
    }

    /**
     * @return RentalOrder[]
     */
    public function getRentalOrder()
    {
        return $this->RentalOrder;
    }

}
