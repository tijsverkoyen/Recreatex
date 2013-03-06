<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfChildCareCentrePeriod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfChildCareCentrePeriod';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ChildCareCentrePeriod[] $ChildCareCentrePeriod
     */
    protected $ChildCareCentrePeriod = array();

    /**
     * @param  ChildCareCentrePeriod[]      $childCareCentrePeriod
     * @return ArrayOfChildCareCentrePeriod
     */
    public function setChildCareCentrePeriod(array $childCareCentrePeriod = array())
    {
        $this->ChildCareCentrePeriod = $childCareCentrePeriod;

        return $this;
    }

    /**
     * @return ChildCareCentrePeriod[]
     */
    public function getChildCareCentrePeriod()
    {
        return $this->ChildCareCentrePeriod;
    }

}
