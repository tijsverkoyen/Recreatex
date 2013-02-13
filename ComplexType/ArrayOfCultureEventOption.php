<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureEventOption extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureEventOption';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureEventOption[] $CultureEventOption
     */
    protected $CultureEventOption = array();


    /**
     * @param CultureEventOption[] $cultureEventOption
     * @return ArrayOfCultureEventOption
     */
    public function setCultureEventOption(array $cultureEventOption = array())
    {
        $this->CultureEventOption = $cultureEventOption;

        return $this;
    }

    /**
     * @return CultureEventOption[]
     */
    public function getCultureEventOption()
    {
        return $this->CultureEventOption;
    }


}

