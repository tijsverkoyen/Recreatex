<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfChildCareCentre extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfChildCareCentre';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ChildCareCentre[] $ChildCareCentre
     */
    protected $ChildCareCentre = array();

    /**
     * @param  ChildCareCentre[]      $childCareCentre
     * @return ArrayOfChildCareCentre
     */
    public function setChildCareCentre(array $childCareCentre = array())
    {
        $this->ChildCareCentre = $childCareCentre;

        return $this;
    }

    /**
     * @return ChildCareCentre[]
     */
    public function getChildCareCentre()
    {
        return $this->ChildCareCentre;
    }

}
