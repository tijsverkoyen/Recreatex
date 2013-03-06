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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var DeliveryAddress|null $DeliveryAddress
     */
    protected $DeliveryAddress;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfValidationResult|null $ValidationResults
     */
    protected $ValidationResults;

    /**
     * @param  DeliveryAddress|null            $deliveryAddress
     * @return SavePersonDeliveryAddressResult
     */
    public function setDeliveryAddress(DeliveryAddress $deliveryAddress = null)
    {
        $this->DeliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * @return DeliveryAddress|null
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }

    /**
     * @param  ArrayOfValidationResult|null    $validationResults
     * @return SavePersonDeliveryAddressResult
     */
    public function setValidationResults(ArrayOfValidationResult $validationResults = null)
    {
        $this->ValidationResults = $validationResults;

        return $this;
    }

    /**
     * @return ArrayOfValidationResult|null
     */
    public function getValidationResults()
    {
        return $this->ValidationResults;
    }

}
