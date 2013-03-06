<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfBusTripValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfBusTripValidationResult';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var BusTripValidationResult[] $BusTripValidationResult
     */
    protected $BusTripValidationResult = array();

    /**
     * @param  BusTripValidationResult[]      $busTripValidationResult
     * @return ArrayOfBusTripValidationResult
     */
    public function setBusTripValidationResult(array $busTripValidationResult = array())
    {
        $this->BusTripValidationResult = $busTripValidationResult;

        return $this;
    }

    /**
     * @return BusTripValidationResult[]
     */
    public function getBusTripValidationResult()
    {
        return $this->BusTripValidationResult;
    }

}
