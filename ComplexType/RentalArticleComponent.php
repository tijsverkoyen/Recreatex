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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Quantity
     */
    protected $Quantity;

    /**
     * @param  integer|null           $quantity
     * @return RentalArticleComponent
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

}
