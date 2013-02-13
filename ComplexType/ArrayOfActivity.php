<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfActivity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfActivity';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Activity[] $Activity
     */
    protected $Activity = array();


    /**
     * @param Activity[] $activity
     * @return ArrayOfActivity
     */
    public function setActivity(array $activity = array())
    {
        $this->Activity = $activity;

        return $this;
    }

    /**
     * @return Activity[]
     */
    public function getActivity()
    {
        return $this->Activity;
    }


}

