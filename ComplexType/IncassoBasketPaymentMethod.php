<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class IncassoBasketPaymentMethod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'IncassoBasketPaymentMethod';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfIncassoCost|null $AdditionalIncassoCosts
     */
    protected $AdditionalIncassoCosts;


    /**
     * @param ArrayOfIncassoCost|null $additionalIncassoCosts
     * @return IncassoBasketPaymentMethod
     */
    public function setAdditionalIncassoCosts(ArrayOfIncassoCost $additionalIncassoCosts = null)
    {
        $this->AdditionalIncassoCosts = $additionalIncassoCosts;

        return $this;
    }

    /**
     * @return ArrayOfIncassoCost|null
     */
    public function getAdditionalIncassoCosts()
    {
        return $this->AdditionalIncassoCosts;
    }


}

