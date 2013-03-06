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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SwimmingDiploma[] $SwimmingDiploma
     */
    protected $SwimmingDiploma = array();

    /**
     * @param  SwimmingDiploma[]      $swimmingDiploma
     * @return ArrayOfSwimmingDiploma
     */
    public function setSwimmingDiploma(array $swimmingDiploma = array())
    {
        $this->SwimmingDiploma = $swimmingDiploma;

        return $this;
    }

    /**
     * @return SwimmingDiploma[]
     */
    public function getSwimmingDiploma()
    {
        return $this->SwimmingDiploma;
    }

}
