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

     * maxOccurs = unbounded     * @var array
     */
    protected $ChildCareCentrePeriod = array();

    /**
     * @param  array                        $childCareCentrePeriod
     * @return ArrayOfChildCareCentrePeriod
     */
    public function setChildCareCentrePeriod(array $childCareCentrePeriod = array())
    {
        $this->ChildCareCentrePeriod = $childCareCentrePeriod;

        return $this;
    }

    /**
     * @return array
     */
    public function getChildCareCentrePeriod()
    {
        if (!is_array($this->ChildCareCentrePeriod)) {
            return array($this->ChildCareCentrePeriod);
        }

        return $this->ChildCareCentrePeriod;
    }
}
