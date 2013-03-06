<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfRentalArticleComponent extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfRentalArticleComponent';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $RentalArticleComponent = array();

    /**
     * @param  array                         $rentalArticleComponent
     * @return ArrayOfRentalArticleComponent
     */
    public function setRentalArticleComponent(array $rentalArticleComponent = array())
    {
        $this->RentalArticleComponent = $rentalArticleComponent;

        return $this;
    }

    /**
     * @return array
     */
    public function getRentalArticleComponent()
    {
        return $this->RentalArticleComponent;
    }
}
