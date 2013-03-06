<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCounty extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCounty';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var County[] $County
     */
    protected $County = array();

    /**
     * @param  County[]      $county
     * @return ArrayOfCounty
     */
    public function setCounty(array $county = array())
    {
        $this->County = $county;

        return $this;
    }

    /**
     * @return County[]
     */
    public function getCounty()
    {
        return $this->County;
    }

}
