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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var RentalOrder|null $ValidatedRentalOrder
     */
    protected $ValidatedRentalOrder;

    /**
     * @param  RentalOrder|null       $validatedRentalOrder
     * @return RentalValidationResult
     */
    public function setValidatedRentalOrder(RentalOrder $validatedRentalOrder = null)
    {
        $this->ValidatedRentalOrder = $validatedRentalOrder;

        return $this;
    }

    /**
     * @return RentalOrder|null
     */
    public function getValidatedRentalOrder()
    {
        return $this->ValidatedRentalOrder;
    }

}
