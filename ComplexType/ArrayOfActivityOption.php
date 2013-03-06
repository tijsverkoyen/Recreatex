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
     * @var array
     */
    protected $ActivityOption = array();

    /**
     * @param  array                 $activityOption
     * @return ArrayOfActivityOption
     */
    public function setActivityOption(array $activityOption = array())
    {
        $this->ActivityOption = $activityOption;

        return $this;
    }

    /**
     * @return array
     */
    public function getActivityOption()
    {
        if (!is_array($this->ActivityOption)) {
            return array($this->ActivityOption);
        }

        return $this->ActivityOption;
    }
}
