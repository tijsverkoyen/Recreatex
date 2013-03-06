<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfExpositionPeriod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfExpositionPeriod';

    /**
     * @var array
     */
    protected $ExpositionPeriod = array();

    /**
     * @param  array                   $expositionPeriod
     * @return ArrayOfExpositionPeriod
     */
    public function setExpositionPeriod(array $expositionPeriod = array())
    {
        $this->ExpositionPeriod = $expositionPeriod;

        return $this;
    }

    /**
     * @return array
     */
    public function getExpositionPeriod()
    {
	    if(!is_array($this->ExpositionPeriod)) {
		    return array($this->ExpositionPeriod);
	    }
	    return $this->ExpositionPeriod;
    }
}
