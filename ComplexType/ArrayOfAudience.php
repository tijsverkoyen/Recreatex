<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfAudience extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfAudience';

    /**
     * @var array
     */
    protected $Audience = array();

    /**
     * @param  array           $audience
     * @return ArrayOfAudience
     */
    public function setAudience(array $audience = array())
    {
        $this->Audience = $audience;

        return $this;
    }

    /**
     * @return array
     */
    public function getAudience()
    {
	    if(!is_array($this->Audience)) {
		    return array($this->Audience);
	    }
	    return $this->Audience;
    }
}
