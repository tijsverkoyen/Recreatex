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
     * @var array
     */
    protected $ActivityPart = array();

    /**
     * @param  array               $activityPart
     * @return ArrayOfActivityPart
     */
    public function setActivityPart(array $activityPart = array())
    {
        $this->ActivityPart = $activityPart;

        return $this;
    }

    /**
     * @return array
     */
    public function getActivityPart()
    {
        return $this->ActivityPart;
    }
}
