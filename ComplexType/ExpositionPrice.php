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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\CalculationType|null $CalculationType
     */
    protected $CalculationType;

    /**
     * @param  SimpleType\CalculationType|null $calculationType
     * @return ExpositionPrice
     */
    public function setCalculationType(SimpleType\CalculationType $calculationType = null)
    {
        $this->CalculationType = $calculationType;

        return $this;
    }

    /**
     * @return SimpleType\CalculationType|null
     */
    public function getCalculationType()
    {
        return $this->CalculationType;
    }
}
