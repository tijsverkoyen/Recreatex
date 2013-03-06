<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfRentalOrderLine extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfRentalOrderLine';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $RentalOrderLine = array();

    /**
     * @param  array                  $rentalOrderLine
     * @return ArrayOfRentalOrderLine
     */
    public function setRentalOrderLine(array $rentalOrderLine = array())
    {
        $this->RentalOrderLine = $rentalOrderLine;

        return $this;
    }

    /**
     * @return array
     */
    public function getRentalOrderLine()
    {
        return $this->RentalOrderLine;
    }
}
