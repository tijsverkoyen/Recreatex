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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ActivityType[] $ActivityType
     */
    protected $ActivityType = array();

    /**
     * @param  ActivityType[]      $activityType
     * @return ArrayOfActivityType
     */
    public function setActivityType(array $activityType = array())
    {
        $this->ActivityType = $activityType;

        return $this;
    }

    /**
     * @return ActivityType[]
     */
    public function getActivityType()
    {
        return $this->ActivityType;
    }
}
