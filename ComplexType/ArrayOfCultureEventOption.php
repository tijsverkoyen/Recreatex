<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureEventOption extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureEventOption';

    /**
     * @var array
     */
    protected $CultureEventOption = array();

    /**
     * @param  array                     $cultureEventOption
     * @return ArrayOfCultureEventOption
     */
    public function setCultureEventOption(array $cultureEventOption = array())
    {
        $this->CultureEventOption = $cultureEventOption;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureEventOption()
    {
        if (!is_array($this->CultureEventOption)) {
            return array($this->CultureEventOption);
        }

        return $this->CultureEventOption;
    }
}
