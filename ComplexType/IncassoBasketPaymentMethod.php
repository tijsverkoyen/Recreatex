<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class IncassoBasketPaymentMethod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'IncassoBasketPaymentMethod';

    /**
     * @var ArrayOfIncassoCost
     */
    protected $AdditionalIncassoCosts;

    /**
     * @param  ArrayOfIncassoCost[optional] $additionalIncassoCosts
     * @return IncassoBasketPaymentMethod
     */
    public function setAdditionalIncassoCosts(ArrayOfIncassoCost $additionalIncassoCosts = null)
    {
        $this->AdditionalIncassoCosts = $additionalIncassoCosts;

        return $this;
    }

    /**
     * @return ArrayOfIncassoCost
     */
    public function getAdditionalIncassoCosts()
    {
        return $this->AdditionalIncassoCosts;
    }
}
