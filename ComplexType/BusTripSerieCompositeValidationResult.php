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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var BusTripSerieRequest|null $BusTripSerie
     */
    protected $BusTripSerie;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfBusTripValidationResult|null $BusTripValidationResults
     */
    protected $BusTripValidationResults;

    /**
     * @param  BusTripSerieRequest|null              $busTripSerie
     * @return BusTripSerieCompositeValidationResult
     */
    public function setBusTripSerie(BusTripSerieRequest $busTripSerie = null)
    {
        $this->BusTripSerie = $busTripSerie;

        return $this;
    }

    /**
     * @return BusTripSerieRequest|null
     */
    public function getBusTripSerie()
    {
        return $this->BusTripSerie;
    }

    /**
     * @param  ArrayOfBusTripValidationResult|null   $busTripValidationResults
     * @return BusTripSerieCompositeValidationResult
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
