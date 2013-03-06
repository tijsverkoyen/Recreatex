<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfActivity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfActivity';

    /**
     * @var array
     */
    protected $Activity = array();

    /**
     * @param  array           $activity
     * @return ArrayOfActivity
     */
    public function setActivity(array $activity = array())
    {
        $this->Activity = $activity;

        return $this;
    }

    /**
     * @return array
     */
    public function getActivity()
    {
	    if(!is_array($this->Activity)) {
		    return array($this->Activity);
	    }
	    return $this->Activity;
    }
}
