<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfFitnessActivity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfFitnessActivity';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $FitnessActivity = array();

    /**
     * @param  array                  $fitnessActivity
     * @return ArrayOfFitnessActivity
     */
    public function setFitnessActivity(array $fitnessActivity = array())
    {
        $this->FitnessActivity = $fitnessActivity;

        return $this;
    }

    /**
     * @return array
     */
    public function getFitnessActivity()
    {
        return $this->FitnessActivity;
    }
}
