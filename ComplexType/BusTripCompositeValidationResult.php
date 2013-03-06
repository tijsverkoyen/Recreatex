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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var BusTripRequest|null $BusTrip
     */
    protected $BusTrip;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfBusTripValidationResult|null $BusTripValidationResults
     */
    protected $BusTripValidationResults;

    /**
     * @param  BusTripRequest|null              $busTrip
     * @return BusTripCompositeValidationResult
     */
    public function setBusTrip(BusTripRequest $busTrip = null)
    {
        $this->BusTrip = $busTrip;

        return $this;
    }

    /**
     * @return BusTripRequest|null
     */
    public function getBusTrip()
    {
        return $this->BusTrip;
    }

    /**
     * @param  ArrayOfBusTripValidationResult|null $busTripValidationResults
     * @return BusTripCompositeValidationResult
     */
    public function setBusTripValidationResults(ArrayOfBusTripValidationResult $busTripValidationResults = null)
    {
        $this->BusTripValidationResults = $busTripValidationResults;

        return $this;
    }

    /**
     * @return ArrayOfBusTripValidationResult|null
     */
    public function getBusTripValidationResults()
    {
        return $this->BusTripValidationResults;
    }

}
