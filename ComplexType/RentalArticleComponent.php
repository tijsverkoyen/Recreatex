<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalArticleComponent extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalArticleComponent';

    /**
     * @var integer
     */
    protected $Quantity;

    /**
     * @param  integer[optional]      $quantity
     * @return RentalArticleComponent
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return integer
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
}
