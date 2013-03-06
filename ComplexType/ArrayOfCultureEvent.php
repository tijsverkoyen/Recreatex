<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureEvent extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureEvent';

    /**
     * @var array
     */
    protected $CultureEvent = array();

    /**
     * @param  array               $cultureEvent
     * @return ArrayOfCultureEvent
     */
    public function setCultureEvent(array $cultureEvent = array())
    {
        $this->CultureEvent = $cultureEvent;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureEvent()
    {
	    if(!is_array($this->CultureEvent)) {
		    return array($this->CultureEvent);
	    }
	    return $this->CultureEvent;
    }
}
