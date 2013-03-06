<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalValidationResult';

    /**
     * @var RentalOrder
     */
    protected $ValidatedRentalOrder;

    /**
     * @param  RentalOrder[optional]  $validatedRentalOrder
     * @return RentalValidationResult
     */
    public function setValidatedRentalOrder(RentalOrder $validatedRentalOrder = null)
    {
        $this->ValidatedRentalOrder = $validatedRentalOrder;

        return $this;
    }

    /**
     * @return RentalOrder
     */
    public function getValidatedRentalOrder()
    {
        return $this->ValidatedRentalOrder;
    }
}
