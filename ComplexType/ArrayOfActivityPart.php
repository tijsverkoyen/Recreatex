<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfActivityPart extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfActivityPart';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ActivityPart[] $ActivityPart
     */
    protected $ActivityPart = array();

    /**
     * @param  ActivityPart[]      $activityPart
     * @return ArrayOfActivityPart
     */
    public function setActivityPart(array $activityPart = array())
    {
        $this->ActivityPart = $activityPart;

        return $this;
    }

    /**
     * @return ActivityPart[]
     */
    public function getActivityPart()
    {
        return $this->ActivityPart;
    }

}
