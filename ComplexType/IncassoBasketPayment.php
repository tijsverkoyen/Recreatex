<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class IncassoBasketPayment extends ComplexTypeAbstract
{
    const CLASS_NAME = 'IncassoBasketPayment';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberOfIncassoPayments
     */
    protected $NumberOfIncassoPayments;


    /**
     * @param integer|null $numberOfIncassoPayments
     * @return IncassoBasketPayment
     */
    public function setNumberOfIncassoPayments($numberOfIncassoPayments)
    {
        $this->NumberOfIncassoPayments = $numberOfIncassoPayments;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberOfIncassoPayments()
    {
        return $this->NumberOfIncassoPayments;
    }


}

