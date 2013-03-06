<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfBusTripRequest extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfBusTripRequest';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var BusTripRequest[] $BusTripRequest
     */
    protected $BusTripRequest = array();

    /**
     * @param  BusTripRequest[]      $busTripRequest
     * @return ArrayOfBusTripRequest
     */
    public function setBusTripRequest(array $busTripRequest = array())
    {
        $this->BusTripRequest = $busTripRequest;

        return $this;
    }

    /**
     * @return BusTripRequest[]
     */
    public function getBusTripRequest()
    {
        return $this->BusTripRequest;
    }

}
