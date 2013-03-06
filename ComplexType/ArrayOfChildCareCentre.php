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

     * maxOccurs = unbounded     * @var array
     */
    protected $ChildCareCentre = array();

    /**
     * @param  array                  $childCareCentre
     * @return ArrayOfChildCareCentre
     */
    public function setChildCareCentre(array $childCareCentre = array())
    {
        $this->ChildCareCentre = $childCareCentre;

        return $this;
    }

    /**
     * @return array
     */
    public function getChildCareCentre()
    {
        if (!is_array($this->ChildCareCentre)) {
            return array($this->ChildCareCentre);
        }

        return $this->ChildCareCentre;
    }
}
