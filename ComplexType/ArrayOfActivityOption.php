<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfActivityOption extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfActivityOption';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ActivityOption[] $ActivityOption
     */
    protected $ActivityOption = array();

    /**
     * @param  ActivityOption[]      $activityOption
     * @return ArrayOfActivityOption
     */
    public function setActivityOption(array $activityOption = array())
    {
        $this->ActivityOption = $activityOption;

        return $this;
    }

    /**
     * @return ActivityOption[]
     */
    public function getActivityOption()
    {
        return $this->ActivityOption;
    }
}
