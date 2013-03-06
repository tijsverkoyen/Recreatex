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

     * maxOccurs = unbounded     * @var array
     */
    protected $RentalOrder = array();

    /**
     * @param  array              $rentalOrder
     * @return ArrayOfRentalOrder
     */
    public function setRentalOrder(array $rentalOrder = array())
    {
        $this->RentalOrder = $rentalOrder;

        return $this;
    }

    /**
     * @return array
     */
    public function getRentalOrder()
    {
        return $this->RentalOrder;
    }
}
