<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionPrice extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionPrice';

    /**
     * @var SimpleTypeCalculationType
     */
    protected $CalculationType;

    /**
     * @param  SimpleType\CalculationType[optional] $calculationType
     * @return ExpositionPrice
     */
    public function setCalculationType(SimpleType\CalculationType $calculationType = null)
    {
        $this->CalculationType = $calculationType;

        return $this;
    }

    /**
     * @return SimpleType\CalculationType
     */
    public function getCalculationType()
    {
        return $this->CalculationType;
    }
}
