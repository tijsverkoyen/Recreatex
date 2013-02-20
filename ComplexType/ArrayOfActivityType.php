<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfActivityType extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfActivityType';

    /**
     * @var array
     */
    protected $ActivityType = array();

    /**
     * @param  array               $activityType
     * @return ArrayOfActivityType
     */
    public function setActivityType(array $activityType = array())
    {
        $this->ActivityType = $activityType;

        return $this;
    }

    /**
     * @return array
     */
    public function getActivityType()
    {
        return $this->ActivityType;
    }
}
