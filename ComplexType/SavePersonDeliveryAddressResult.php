<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SavePersonDeliveryAddressResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SavePersonDeliveryAddressResult';

    /**
     * @var DeliveryAddress
     */
    protected $DeliveryAddress;

    /**
     * @var ArrayOfValidationResult
     */
    protected $ValidationResults;

    /**
     * @param  DeliveryAddress[optional]       $deliveryAddress
     * @return SavePersonDeliveryAddressResult
     */
    public function setDeliveryAddress(DeliveryAddress $deliveryAddress = null)
    {
        $this->DeliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * @return DeliveryAddress
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }

    /**
     * @param  ArrayOfValidationResult[optional] $validationResults
     * @return SavePersonDeliveryAddressResult
     */
    public function setValidationResults(ArrayOfValidationResult $validationResults = null)
    {
        $this->ValidationResults = $validationResults;

        return $this;
    }

    /**
     * @return ArrayOfValidationResult
     */
    public function getValidationResults()
    {
        return $this->ValidationResults;
    }
}
