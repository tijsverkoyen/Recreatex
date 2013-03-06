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

     * maxOccurs = unbounded     * @var array
     */
    protected $BusTripRequest = array();

    /**
     * @param  array                 $busTripRequest
     * @return ArrayOfBusTripRequest
     */
    public function setBusTripRequest(array $busTripRequest = array())
    {
        $this->BusTripRequest = $busTripRequest;

        return $this;
    }

    /**
     * @return array
     */
    public function getBusTripRequest()
    {
        if (!is_array($this->BusTripRequest)) {
            return array($this->BusTripRequest);
        }

        return $this->BusTripRequest;
    }
}
