<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BusTripSerieCompositeValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BusTripSerieCompositeValidationResult';

    /**
     * @var BusTripSerieRequest
     */
    protected $BusTripSerie;

    /**
     * @var ArrayOfBusTripValidationResult
     */
    protected $BusTripValidationResults;

    /**
     * @param  BusTripSerieRequest[optional]         $busTripSerie
     * @return BusTripSerieCompositeValidationResult
     */
    public function setBusTripSerie(BusTripSerieRequest $busTripSerie = null)
    {
        $this->BusTripSerie = $busTripSerie;

        return $this;
    }

    /**
     * @return BusTripSerieRequest
     */
    public function getBusTripSerie()
    {
        return $this->BusTripSerie;
    }

    /**
     * @param  ArrayOfBusTripValidationResult[optional] $busTripValidationResults
     * @return BusTripSerieCompositeValidationResult
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
