<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class IncassoCost extends ComplexTypeAbstract
{
    const CLASS_NAME = 'IncassoCost';

    /**
     * @var integer
     */
    protected $NumberOfPayments;

    /**
     * @param  integer|null $numberOfPayments
     * @return IncassoCost
     */
    public function setNumberOfPayments($numberOfPayments)
    {
        $this->NumberOfPayments = $numberOfPayments;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberOfPayments()
    {
        return $this->NumberOfPayments;
    }
}
