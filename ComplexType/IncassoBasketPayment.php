<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class IncassoBasketPayment extends ComplexTypeAbstract
{
    const CLASS_NAME = 'IncassoBasketPayment';

    /**
     * @var integer
     */
    protected $NumberOfIncassoPayments;

    /**
     * @param  integer[optional]    $numberOfIncassoPayments
     * @return IncassoBasketPayment
     */
    public function setNumberOfIncassoPayments($numberOfIncassoPayments)
    {
        $this->NumberOfIncassoPayments = $numberOfIncassoPayments;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfIncassoPayments()
    {
        return $this->NumberOfIncassoPayments;
    }
}
