<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSwimmingDiploma extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSwimmingDiploma';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $SwimmingDiploma = array();

    /**
     * @param  array                  $swimmingDiploma
     * @return ArrayOfSwimmingDiploma
     */
    public function setSwimmingDiploma(array $swimmingDiploma = array())
    {
        $this->SwimmingDiploma = $swimmingDiploma;

        return $this;
    }

    /**
     * @return array
     */
    public function getSwimmingDiploma()
    {
        return $this->SwimmingDiploma;
    }
}
