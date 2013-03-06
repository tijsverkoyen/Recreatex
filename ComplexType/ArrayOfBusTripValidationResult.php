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

     * maxOccurs = unbounded     * @var array
     */
    protected $BusTripValidationResult = array();

    /**
     * @param  array                          $busTripValidationResult
     * @return ArrayOfBusTripValidationResult
     */
    public function setBusTripValidationResult(array $busTripValidationResult = array())
    {
        $this->BusTripValidationResult = $busTripValidationResult;

        return $this;
    }

    /**
     * @return array
     */
    public function getBusTripValidationResult()
    {
        if (!is_array($this->BusTripValidationResult)) {
            return array($this->BusTripValidationResult);
        }

        return $this->BusTripValidationResult;
    }
}
