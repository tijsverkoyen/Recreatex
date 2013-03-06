<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BusTripCompositeValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BusTripCompositeValidationResult';

    /**
     * @var BusTripRequest
     */
    protected $BusTrip;

    /**
     * @var ArrayOfBusTripValidationResult
     */
    protected $BusTripValidationResults;

    /**
     * @param  BusTripRequest[optional]         $busTrip
     * @return BusTripCompositeValidationResult
     */
    public function setBusTrip(BusTripRequest $busTrip = null)
    {
        $this->BusTrip = $busTrip;

        return $this;
    }

    /**
     * @return BusTripRequest
     */
    public function getBusTrip()
    {
        return $this->BusTrip;
    }

    /**
     * @param  ArrayOfBusTripValidationResult[optional] $busTripValidationResults
     * @return BusTripCompositeValidationResult
     */
    public function setBusTripValidationResults(ArrayOfBusTripValidationResult $busTripValidationResults = null)
    {
        $this->BusTripValidationResults = $busTripValidationResults;

        return $this;
    }

    /**
     * @return ArrayOfBusTripValidationResult
     */
    public function getBusTripValidationResults()
    {
        return $this->BusTripValidationResults;
    }
}
